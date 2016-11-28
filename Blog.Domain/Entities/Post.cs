using System;

namespace Blog.Domain.Entities
{
    public class Post : Entitie
    {
        public Autor Autor { get; set; }
        public string Titulo { get; set; }
        public string Resumo { get; set; }
        public string Conteudo { get; set; }
        public DateTime DateTime { get; set; }
        public Categoria Categoria { get; set; }
        public bool Ativo { get; set; }
        public Autor PosteDesativado { get; set; }
    }
}
