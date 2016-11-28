using System;

namespace Blog.Domain.Entities
{
    public class Post : Entitie
    {
        public Autor Autor { get; set; }
        public string Titulo { get; set; }
        public string Resumo { get; set; }
        public string Artigo { get; set; }
        public DateTime DateTime { get; set; }
        public bool Ativo { get; set; }
        public Autor PosteDesativado { get; set; }
    }
}
