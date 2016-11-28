using Blog.Domain.Contracts;
using Blog.Domain.Entities;

namespace Blog.Application
{
    public class CategoriaApplication : Application<Categoria>
    {
        private readonly IRepository<Categoria> _repository;

        public CategoriaApplication(IRepository<Categoria> repository) : base(repository)
        {
            _repository = repository;
        }
    }
}
