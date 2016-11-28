using System.Linq;
using Blog.Domain.Contracts;
using Blog.Domain.Entities;

namespace Blog.Application
{
    public class AutorApplication : Application<Autor>
    {
        private readonly IRepository<Autor> _repository;

        public AutorApplication(IRepository<Autor> repository) : base(repository)
        {
            _repository = repository;
        }

        public Autor Login(string login, string senha)
        {
            return _repository.GetAll().FirstOrDefault(x => x.Login == login && x.Senha == senha);
        }

        public Autor BuscarPorLogin(string nome)
        {
            return _repository.GetAll().FirstOrDefault(x => x.Login == nome);
        }
    }
}
