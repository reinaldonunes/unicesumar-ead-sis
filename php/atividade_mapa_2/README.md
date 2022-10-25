# **MAPA BACK-END II - RA 21027928-5**

## OBJETIVO
Desenvolver uma aplicação para uma cooperativa de crédito, a fim de registrar e consultar tíckets através de protocolos.

## ESPECIFICAÇÕES

### Front-end
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![BOOTSTRAP 5](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

### Back-end
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-CA2136?style=for-the-badge&logo=apache&logoColor=white)


A aplicação também utiliza conexão PDO e arquitetura MVC OOP.

## COMO EXECUTAR O PROJETO
- [x] Primeiramente, ter um servidor apache instalado.
> Também é possível instalar o Xampp para Linux via terminal ou baixando o instalável pelo site da aplicação.
- [x] Inicializar o servidor via interface gráfica (Windows) ou via terminal (Linux) com o comando `sudo /opt/lampp/lampp start`
- [x] Clone este repositório dentro da sua pasta `htdocs/` através desse comando `git@github.com:reinaldonunes/unicesumar_ticket_protocol.git`
> Se você tiver o arquivo .zip, descompacte-o dentro da pasta htdocs, não sendo necessário realizar a etapa anterior.
- [x] Agora, abra o seu browser e acesse `http://localhost/unicesumar_ticket_protocol`
- [x] O servidor irá verificar se a base de dados existe. Caso não exista, ela irá instalar automaticamente e após isso a aplicação rodará normalmente.
> Atenção: se o seu servidor local conter usuário e senha diferente das configurações padrões, é necessário editar os arquivos db/migrations/2022_09_16_create_schema.php, db/migrations/2022_09_16_create_protocols_table.php e app/models/Protocol.php com as suas respectivas credenciais.
