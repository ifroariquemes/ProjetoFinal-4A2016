using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Blog.Domain.Contracts;
using Blog.Domain.Entities;

namespace Blog.Application
{
    public class Application<T> where T : Entitie
    {
        private readonly IRepository<T> _repository;
        public Application(IRepository<T> repository)
        {
            _repository = repository;
        }
        public void Save(T entidade)
        {
            _repository.Save(entidade);
        }
        public void Delete(string id)
        {
            _repository.Delete(id);
        }
        public IEnumerable<T> GetAll()
        {
            return _repository.GetAll();
        }
        public IEnumerable<T> Get(int skip, int take)
        {
            return _repository.Get(skip, take);
        }
        public T GetById(string id)
        {
            return _repository.GetById(id);
        }
    }
}