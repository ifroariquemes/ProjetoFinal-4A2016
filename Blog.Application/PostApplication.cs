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
    }
}

