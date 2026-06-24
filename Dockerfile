# Usa uma imagem oficial do PHP com Apache integrado
FROM php:8.2-apache

# Copia os arquivos de código e estilo para o diretório raiz do Apache
COPY index.php /var/www/html/
COPY estilo.css /var/www/html/

# Copia a pasta de imagens mantendo a estrutura de diretórios necessária
COPY images/ /var/www/html/images/

# Ajusta as permissões dos arquivos para o usuário padrão do Apache (www-data)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expõe a porta 80 para permitir o acesso web ao container
EXPOSE 80
