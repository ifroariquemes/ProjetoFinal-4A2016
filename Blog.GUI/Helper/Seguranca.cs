using System.Collections.Generic;
using System.Linq;
using System.Security.Claims;
using System.Web;
using Blog.Domain.Entities;
using Microsoft.AspNet.Identity;
using Microsoft.Owin;
using Microsoft.Owin.Security;

namespace Blog.GUI.Helper
{
    public static class Seguranca
    {
        public static void GerearSessaoDeUsuario(Autor usuarioLogado)
        {
            var permissoes = usuarioLogado.Permissao;
            var claims = new List<Claim>
            {
                new Claim("Id", usuarioLogado.Id),
                new Claim(ClaimTypes.Name, usuarioLogado.Nome),
                new Claim(ClaimTypes.Email, usuarioLogado.Login),
                //Todo: Adicionar todas as roles
                //new Claim(ClaimTypes.Role, usuarioLogado.Grupo.Nome ?? "")
            };
            //todo: testa pra ve se todas as permissoes foram adicionandas, refatora a segurança do controller pra aceitar mais de uma permissão!
            claims.AddRange(permissoes.Select(roles => new Claim(ClaimTypes.Role, roles)));

            var identity = new ClaimsIdentity(claims, DefaultAuthenticationTypes.ApplicationCookie);
            var ctx = HttpContext.Current.Request.GetOwinContext();
            var authenticationManager = ctx.Authentication;
            authenticationManager.SignIn(new AuthenticationProperties { IsPersistent = false }, identity);
        }
        public static void DestruirSessaoDeUsuario()
        {
            var ctx = HttpContext.Current.Request.GetOwinContext();
            var authenticationManager = ctx.Authentication;
            authenticationManager.SignOut();
        }
        public static Autor Usuario()
        {
            var ctx = (OwinContext)HttpContext.Current.Request.GetOwinContext();
            var user = ctx.Authentication.User;
            if (user.FindFirst("Id") == null)
                return new Autor();
            return new Autor()
            {
                Id = user.FindFirst("Id").Value,
                Login = user.FindFirst(ClaimTypes.Email).Value,
                Nome = user.FindFirst(ClaimTypes.Name).Value,
            };
        }
    }
}