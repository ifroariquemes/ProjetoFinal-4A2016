using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Blog.Domain.Contracts;
using Blog.Domain.Entities;
using MongoDB.Driver.Builders;
using MongoDB.Driver.Linq;

namespace Blog.Repository
{
    public class RepositoryApplication<T> : IRepository<T> where T : Entitie
    {
        private readonly Repository<T> _context;
        public RepositoryApplication()
        {
            _context = new Repository<T>();
        }
        public void Save(T entitie)
        {
            _context.Collection.Save(entitie);
        }
        public void Delete(string id)
        {
            _context.Collection.Remove(Query.EQ("_id", id));
        }
        public IEnumerable<T> GetAll()
        {
            return _context.Collection.AsQueryable();
        }
        public IEnumerable<T> Get(int skip, int take)
        {
            return _context.Collection.AsQueryable().Skip(skip).Take(take);
        }
        public T GetById(string id)
        {
            return _context.Collection.FindOneById(id);
        }
    }
}