using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using Blog.GUI.Helper;

namespace Blog.GUI.Areas.Painel.Controllers
{
    public class AutorController : Controller
    {
        public ActionResult Editar()
        {
            var id = Seguranca.Usuario().Id;
            if (string.IsNullOrEmpty(id))
                return View(new Autor());

            var autorBd = Fabrica<Autor>.AutorApplication().GetById(id);
            if (autorBd == null)
            {
                return View(new Autor());
            }
            return View(autorBd);
        }
        [HttpPost]
        public ActionResult Editar(Autor autor)
        {
            if (!ModelState.IsValid)
                return View(autor);

            var senha = autor.Senha;
            if (string.IsNullOrEmpty(autor.Id))
            {
                if (string.IsNullOrEmpty(senha))
                {
                    ModelState.AddModelError("Senha", "O campo senha é obrigatório!");
                    return View(autor);
                }
            }
            else if (string.IsNullOrEmpty(senha))
            {
                var autorBanco = Fabrica<Autor>.AutorApplication().GetById(Seguranca.Usuario().Id);
                senha = autorBanco.Senha;
            }

            var permissoes = new List<string>();
            permissoes.Add("Painel");
            var autorSalvar = new Autor()
            {
                Id = Seguranca.Usuario().Id,
                Nome = autor.Nome,
                Login = autor.Login,
                Senha = senha,
                Permissao = permissoes
            };

            Fabrica<Autor>.AutorApplication().Save(autorSalvar);
            return RedirectToAction("Dashboard", "Home", new {Area = "Painel"});
        }
    }
}