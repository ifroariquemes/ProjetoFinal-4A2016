using Blog.Domain.Entities;
using Blog.Repository;

namespace Blog.Application
{
    public static class Fabrica<T> where T : Entitie
    {
        public static Application<T> Application()
        {
            return new Application<T>(new RepositoryApplication<T>());
        }
        public static AutorApplication AutorApplication()
        {
            return new AutorApplication(new RepositoryApplication<Autor>());
        }
        public static PostApplication PostApplication()
        {
            return new PostApplication(new RepositoryApplication<Post>());
        }
        public static CategoriaApplication CategoriaApplication()
        {
            return new CategoriaApplication(new RepositoryApplication<Categoria>());
        }
    }
}