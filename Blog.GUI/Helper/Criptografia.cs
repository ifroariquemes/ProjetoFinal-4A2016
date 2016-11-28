using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Web;

namespace Blog.GUI.Helper
{
    public class Criptografia
    {
        public static string Codifica(string senha)
        {
            //criar senha md5
            var senhaMd5 = MD5.Create();
            // Converter a String para array de bytes, que é como a biblioteca trabalha.
            var data = senhaMd5.ComputeHash(Encoding.UTF8.GetBytes(senha));

            // Cria-se um StringBuilder para recompôr a string.
            var sBuilder = new StringBuilder();

            // Loop para formatar cada byte como uma String em hexadecimal
            foreach (var t in data)
            {
                sBuilder.Append(t.ToString("x2"));
            }
            return sBuilder.ToString();
        }
    }
}