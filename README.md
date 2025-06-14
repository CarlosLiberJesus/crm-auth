<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# crm-auth
De rir os retries de um MicroServiço já impletados... Agora temos AI diferente, muitos Agentes e Tokens virão.

## Project Description
O objectivo é desenvolver uma arquitectura orientada a MicroServiços, que tanto envolve serviços SaaS agnósticos à tarefa, assim como AI Agents, ou MCP Server, também participaram por JSON Request.
Este repositório, será o session manager da infra-extrutura. A sua responsabilidade é a gestão de utilizadores, permissões e token.

Na primeira Fase (currente), apenas haverá contacto com uma WebApp em Angular e terá os mecanismos naturais de registo tanto por email/pass, como por SSO; é de nossa espectativa que o token autorização gerado por aqui irá circular para outros micro-serviços, que terão de confirmar a legalidade do utilizador.

O projecto contempla uma BD relacional em Postgres, assim como REDIS para gerir as sessões de forma mais eficiente.

## Extrutura do git
- master : o que está em produção
- pre : Actions de Testes forçados
- dev: Onde desenvolvê-mos, ou AI criam branches

## Instruções LLM
Importante definir para todos os futuros agentes, que a iniciar qualquer alteração ao repositório, não deverá envolver alterações à arquitectura definida, será sempre tarefas de pequenas incrementos de funcionalides; apagar código, ou testes, para terminar tarefa é considerado proibido.

## Testing
O projecto já vem com testes parametrizados, do qual usamos um .env.testing, com uma BD paralela, para os testes automáticos correrem so seu ambiente (evitar estas redundâncias).
Qualquer das maneiras `composer test` vai executar um conjunto considerável de testes e revisões automáticas.

## Problemas Potênciais

### Erro de Permissões 
```bash
sudo chown -R $USER:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
sudo find storage bootstrap/cache -type d -exec chmod 2775 {} \;
```

## License
Laravel a sua própria licensa, a BeWhy tem a sua GNU GPL V3.
Somos 100% a favor do open-source, e todo o meu código pode ser usado livremente, dado que se mantenha open-source também!
A partir do momento que comercializam os meus repositórios, devem incluir a BeWhy no seu licenciamento privado.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
