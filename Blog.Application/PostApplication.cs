using System.Collections.Generic;
using System.Linq;
using Blog.Domain.Contracts;
using Blog.Domain.Entities;

namespace Blog.Application
{
    public class PostApplication : Application<Post>
    {
        private readonly IRepository<Post> _repository;

        public PostApplication(IRepository<Post> repository) : base(repository)
        {
            _repository = repository;
        }

        public IEnumerable<Post> BuscarPorCategoria(string idCategoria)
        {
            return _repository.GetAll().Where(x => x.Categoria.Id == idCategoria).OrderByDescending(x=>x.DateTime);
        }
    }
}

