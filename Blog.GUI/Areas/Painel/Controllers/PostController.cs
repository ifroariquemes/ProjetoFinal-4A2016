using System;
using System.Globalization;
using System.Linq;
using System.Text.RegularExpressions;
using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using Blog.GUI.Helper;
using PagedList;

namespace Blog.GUI.Areas.Painel.Controllers
{
    [Authorize]
    public class PostController : Controller
    {
        public ActionResult Index(int? page)
        {
            var numeroDaPagina = page ?? 1;
            var listaPaginada = Fabrica<Post>.PostApplication().GetAll().OrderByDescending(x => x.DateTime).ToPagedList(numeroDaPagina, 10);

            return View(listaPaginada);
        }
        public ActionResult Editar(string id)
        {
            ViewBag.Categoria = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList();
            if (string.IsNullOrEmpty(id))
                return View(new PostViewModel());

            var post = Fabrica<Post>.PostApplication().GetById(id);
            if (post == null)
            {
                return View(new PostViewModel());
            }

            var postViewModel = new PostViewModel()
            {
                Id = post.Id,
                Titulo = post.Titulo,
                Resumo = post.Resumo,
                Conteudo = post.Conteudo,
                Autor = Fabrica<Autor>.AutorApplication().GetById(Seguranca.Usuario().Id),
                CategoriaId = post.Categoria.Id,
                Data = post.DateTime,
                PosteDesativado = post.PosteDesativado,
                Ativo = post.Ativo,
            };

            return View(postViewModel);
        }
        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Editar(PostViewModel post)
        {
            ViewBag.Categoria = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList();
            if (!ModelState.IsValid)
            {
                return View(post);
            }

            var postSalvar = new Post()
            {
                Id = post.Id,
                Titulo = post.Titulo,
                Resumo = post.Resumo,
                Conteudo = post.Conteudo,
                Categoria = Fabrica<Categoria>.CategoriaApplication().GetById(post.CategoriaId),
                DateTime = post.Data,
                Autor = Fabrica<Autor>.AutorApplication().GetById(Seguranca.Usuario().Id),
                Ativo = post.Ativo,
                PosteDesativado = post.PosteDesativado
            };

            Fabrica<Post>.PostApplication().Save(postSalvar);
            return RedirectToAction("Index");
        }
        public ActionResult AtivarDesativarPost(string idPost, bool status)
        {
            bool estatus;
            if (status)
            {
                estatus = false;
            }
            else
            {
                estatus = true;
            }

            var post = Fabrica<Post>.PostApplication().GetById(idPost);
            if (estatus)
            {
                post.Ativo = true;
                Fabrica<Post>.PostApplication().Save(post);
            }
            else
            {
                post.Ativo = false;
                Fabrica<Post>.PostApplication().Save(post);
            }
            return RedirectToAction("Index");
        }
    }
    public class PostViewModel
    {
        public Autor Autor { get; set; }
        public string Id { get; set; }
        public string Titulo { get; set; }
        public string Resumo { get; set; }
        public string Conteudo { get; set; }
        public string CategoriaId { get; set; }
        public Categoria Categoria { get; set; }
        public DateTime Data { get; set; }
        public bool Ativo { get; set; }
        public Autor PosteDesativado { get; set; }

    }
}