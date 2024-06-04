FROM drupal:10.2.6-php8.3-apache-bookworm

EXPOSE 80

# Copy the site files into image
# (In drupal nothing has to be build, only php)
RUN rm -rf /var/www/html/sites

COPY --chown=www-data:www-data ./drupal-codebase/sites /opt/drupal/web/sites