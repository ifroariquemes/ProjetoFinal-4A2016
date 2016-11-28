using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Bson.Serialization.Conventions;
using MongoDB.Driver;
using MongoDB.Driver.Builders;
using MongoDB.Driver.GridFS;

namespace Blog.Repository
{
    public class Repository<T>
    {
        private readonly MongoDatabase _database;
        private readonly MongoServer _server;
        public Repository()
        {
            var url = new MongoUrl("mongodb://127.0.0.1/Blog");
            var client = new MongoClient(url);
            _server = client.GetServer();
            _database = _server.GetDatabase(url.DatabaseName);
            Collection = _database.GetCollection<T>(typeof(T).Name.ToLower());
            var conventions = new ConvensoesMongo();
            ConventionRegistry.Register("Convensoes", conventions, t => true);
        }
        public MongoCollection<T> Collection { get; private set; }
        public Dictionary<string, string> FindFile(string id, ref MemoryStream retorno)
        {
            var fileInfo = _database.GridFS.FindOne(Query.EQ("_id", new BsonObjectId(new ObjectId(id))));
            var mySetting = new MongoGridFSSettings();
            var gfs = new MongoGridFS(_server, _database.Name, mySetting);

            gfs.Download(retorno, fileInfo);
            return new Dictionary<string, string> { { fileInfo.ContentType, fileInfo.Name } };
        }
        public void DeleteFile(string id)
        {
            var mySetting = new MongoGridFSSettings();
            var gfs = new MongoGridFS(_server, _database.Name, mySetting);
            gfs.Delete(Query.EQ("_id", new BsonObjectId(new ObjectId(id))));
        }
        public string InsertFile(Stream arquivo, string nome, string contentType)
        {
            var mySetting = new MongoGridFSSettings();
            var gfs = new MongoGridFS(_server, _database.Name, mySetting);
            var fileInfo = gfs.Upload(arquivo, nome);
            gfs.SetContentType(fileInfo, contentType);
            return fileInfo.Id.AsObjectId.ToString();
        }
    }
    public class ConvensoesMongo : IConventionPack
    {
        public IEnumerable<IConvention> Conventions
        {
            get
            {
                return new List<IConvention>
                             {
                                 new IgnoreExtraElementsConvention(true)
                             };
            }
        }
    }
}

