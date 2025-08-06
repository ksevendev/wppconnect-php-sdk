# WppConnect PHP SDK

Este é um SDK PHP completo para comunicação com o backend do WPPConnect.

## Instalação

```bash
composer require kseven/wppconnect-php-sdk
```

## Exemplo de uso

```php
use WppConnect\WppConnectClient;

$sdk = new WppConnectClient('https://seu-servidor.com.br', 'SEU_TOKEN');

$sdk->message()->sendMessage('5511999999999', 'Olá via SDK!');
$sdk->session()->startSession('cliente001');
```

## Serviços disponíveis

- Envio de mensagens
- Sessões
- Contatos