create table tabImagensAlbum
(
	idImgAlbum int not null auto_increment primary key,
    fkIdAlbum int,
    imagem varchar(150),
    descricao varchar(50)
)