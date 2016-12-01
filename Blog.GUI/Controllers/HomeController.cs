using System.Collections.Generic;
using System.Linq;
using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using PagedList;

namespace Blog.GUI.Controllers
{
    public class HomeController : Controller
    {
        // GET: Home
        public ActionResult Index(int ? page)
        {
            ViewBag.Categorias = Fabrica<Categoria>.CategoriaApplication().GetAll().ToList() ?? new List<Categoria>();

            var numeroDaPagina = page ?? 1;
            var listaPaginada = Fabrica<Post>.PostApplication().GetAll().OrderByDescending(x => x.DateTime).ToPagedList(numeroDaPagina, 20);

            return View(listaPaginada);
        }
    }
}