using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using PagedList;

namespace Blog.GUI.Controllers
{
    public class PostController : Controller
    {
        public ActionResult Index(int? page)
        {
            ViewBag.Categorias = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList() ?? new List<Categoria>();

            var numeroDaPagina = page ?? 1;
            var listaPaginada = Fabrica<Post>.PostApplication().GetAll().OrderByDescending(x => x.DateTime).ToPagedList(numeroDaPagina, 20);

            return View(listaPaginada);
        }
        public ActionResult Ler(string idPost)
        {
            ViewBag.Categorias = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList() ?? new List<Categoria>();

            var post = Fabrica<Post>.PostApplication().GetById(idPost) ?? new Post();

            return View(post);
        }

        public ActionResult PorCategoria(int? page, string idCategoria)
        {
            ViewBag.Categorias = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList() ?? new List<Categoria>();
            ViewBag.CategoriaId = idCategoria;

            var numeroDaPagina = page ?? 1;
            var listaPaginada = Fabrica<Post>.PostApplication().BuscarPorCategoria(idCategoria).OrderByDescending(x => x.DateTime).ToPagedList(numeroDaPagina, 20);

            return View(listaPaginada);
        }
    }
}