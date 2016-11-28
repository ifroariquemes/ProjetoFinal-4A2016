using System.Collections.Generic;
using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using Blog.GUI.Helper;
using Blog.GUI.Models;

namespace Blog.GUI.Areas.Painel.Controllers
{
    [Authorize]
    public class HomeController : Controller
    {
        public ActionResult Dashboard()
        {
            return View();
        }
        [AllowAnonymous]
        public ActionResult Index(LoginViewModel usuario)
        {
            var user = Seguranca.Usuario();
            if (user.Nome != null)
                return RedirectToAction("Dashboard", "Home", new { Area = "Painel" });

            if (Request.HttpMethod == "POST")
            {
                var usuarioLogado = Fabrica<Autor>.AutorApplication().Login(usuario.Login, Criptografia.Codifica(usuario.Senha));
                if (usuarioLogado != null)
                {
                    Seguranca.GerearSessaoDeUsuario(usuarioLogado);
                    return RedirectToAction("Dashboard");
                }
            }
            return View(usuario);
        }
        public ActionResult Lock()
        {
            return View();
        }
        public ActionResult Sair()
        {
            Seguranca.DestruirSessaoDeUsuario();
            return RedirectToAction("Index");
        }

        [AllowAnonymous]
        public ActionResult Registrar()
        {
            return View(new Autor());
        }
        [AllowAnonymous]
        [HttpPost]
        public ActionResult Registrar(Autor autor)
        {
            if (!ModelState.IsValid)
            {
                return View();
            }

            var autorBd = Fabrica<Autor>.AutorApplication().BuscarPorLogin(autor.Login);
            if (autorBd != null)
            {
                return View();
            }

            var permissao = new List<string>();
            permissao.Add("Painel");
            var autorSalvar = new Autor()
            {
                Login = autor.Login,
                Nome = autor.Nome,
                Senha = Criptografia.Codifica(autor.Senha),
                Permissao = permissao
            };

            Fabrica<Autor>.AutorApplication().Save(autorSalvar);
            return RedirectToAction("Index");
        }
    }
}