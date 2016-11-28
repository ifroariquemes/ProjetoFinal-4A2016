using System.Web.Mvc;
using Blog.Application;
using Blog.Domain.Entities;
using PagedList;

namespace Blog.GUI.Areas.Painel.Controllers
{
    [Authorize]
    public class CategoriaController : Controller
    {
        public ActionResult Index(int? page)
        {
            var numeroDaPagina = page ?? 1;
            var listaPaginada = Fabrica<Categoria>.CategoriaApplication().GetAll().ToPagedList(numeroDaPagina, 10);

            return View(listaPaginada);
        }
        public ActionResult Editar(string id)
        {
            if (string.IsNullOrEmpty(id))
                return View(new Categoria());

            var categoria = Fabrica<Categoria>.CategoriaApplication().GetById(id);
            if (categoria == null)
            {
                return View(new Categoria());
            }
            return View(categoria);
        }
        [HttpPost]
        public ActionResult Editar(Categoria categoria)
        {
            if (!ModelState.IsValid)
                return View(categoria);
            Fabrica<Categoria>.CategoriaApplication().Save(categoria);
            return RedirectToAction("Index");
        }
        public JsonResult Excluir(string id)
        {
            //Todo: nâo excluir categoria que possua noticias, ou, setar uma categoria padrao para as noticias ao excluir a categoria dela
            Fabrica<Categoria>.CategoriaApplication().Delete(id);
            return Json("", JsonRequestBehavior.AllowGet);
        }
    }
}