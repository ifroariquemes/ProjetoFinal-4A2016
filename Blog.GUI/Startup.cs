using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Blog.GUI.Startup))]
namespace Blog.GUI
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
