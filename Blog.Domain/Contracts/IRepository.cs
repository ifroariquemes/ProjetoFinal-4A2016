using System.Collections.Generic;
using Blog.Domain.Entities;

namespace Blog.Domain.Contracts
{
    public interface IRepository<T> where T : Entitie
    {
        void Save(T entitie);
        void Delete(string id);
        IEnumerable<T> GetAll();
        IEnumerable<T> Get(int skip, int take);
        T GetById(string id);
    }
}