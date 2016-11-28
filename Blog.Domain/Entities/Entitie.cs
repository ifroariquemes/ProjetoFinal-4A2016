using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Blog.Domain.Entities
{
    public class Entitie
    {
        private string _id;
        public string Id
        {
            get
            {
                if (!string.IsNullOrEmpty(_id))
                {
                    return _id;
                }
                _id = Guid.NewGuid().ToString("N");
                return _id;
            }
            set { _id = value; }
        }
    }
}


