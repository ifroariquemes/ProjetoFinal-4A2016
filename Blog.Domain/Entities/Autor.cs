using System.Collections.Generic;

namespace Blog.Domain.Entities
{
    public class Autor : Entitie
    {
        public string Nome { get; set; }
        public string Login { get; set; }
        public string Senha { get; set; }
        public List<string> Permissao { get; set; }
    }
}
