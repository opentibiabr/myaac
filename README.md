# [MyAAC](https://my-aac.org)

[![Build Status Master](https://img.shields.io/travis/slawkens/myaac/master)](https://travis-ci.org/github/slawkens/myaac)
[![License: GPL-3.0](https://img.shields.io/github/license/slawkens/myaac)](https://opensource.org/licenses/gpl-license)
[![Downloads Count](https://img.shields.io/github/downloads/slawkens/myaac/total)](https://github.com/slawkens/myaac/releases)
[![PHP Versions](https://img.shields.io/travis/php-v/slawkens/myaac/master)](https://github.com/slawkens/myaac/blob/d8b3b4135827ee17e3c6d41f08a925e718c587ed/.travis.yml#L3)
[![OpenTibia Discord](https://img.shields.io/discord/288399552581468162)](https://discord.gg/2J39Wus)
[![Closed Issues](https://img.shields.io/github/issues-closed-raw/slawkens/myaac)](https://github.com/slawkens/myaac/issues?q=is%3Aissue+is%3Aclosed)

MyAAC é um Automatic Account Creator (AAC) gratuito e de código aberto escrito em PHP. É uma bifurcação do projeto Gesior. Ele suporta apenas bancos de dados MySQL. 

### Requirements

	- PHP 5.6 or later
	- MySQL database
	- PDO PHP Extension
	- XML PHP Extension
	- ZIP PHP Extension
	- (optional) mod_rewrite to use friendly_urls

### Instalação

	Apenas descompacte e descompacte a fonte (o que você já deveria ter feito,
	se você estiver lendo isso), na raiz de documentos do seu servidor web. 

	MyAAC precisa de permissões adequadas para manipular arquivos corretamente.
	Se você estiver usando o apache2, seu diretório precisa ter o proprietário definido como: www-data, você pode fazer isso usando o seguinte comando: 
		chown -R www-data.www-data /var/www/*
			(ou qualquer outro caminho em que a instalação do MyAAC esteja localizada ..) 

	  Note: Linux only
		Se você estiver no linux, use estes comandos para definir as permissões adequadas:
			chmod 660 config.local.php
			chmod 660 images/guilds
			chmod 660 images/houses
			chmod 660 images/gallery
			chmod -R 770 system/cache

	Visit http://your_domain/install (http://localhost/install) and follow instructions in the browser.

### Configuração

Verifique *config.php* para obter mais informações.
Use *config.local.php* para suas alterações de configuração local. 

### Branches

This repository follows the Git Flow Workflow.
Cheatsheet: [Git-Flow-Cheetsheet](https://danielkummer.github.io/git-flow-cheatsheet)

That means, we use:
* master branch, for current stable release
* develop branch, for development version (next release)
* feature branches, for features etc.

### Known Problems

- Some compatibility issues with some exotical distibutions.


### Contributing

Contribuições são mais que bem-vindas.

As solicitações de pull devem ser feitas para o branch Dev, pois esse é o branch de trabalho, o master é para o código de lançamento.   

Look: [Contributing](https://github.com/otsoft/myaac/wiki/Contributing) in our wiki.

### Other Notes

If you have a great idea or want contribute to the project - visit our website at https://www.my-aac.org

### License

This program and all associated files are released under the GNU Public License.  
See [LICENSE](https://github.com/slawkens/myaac/blob/master/LICENSE) for details.
