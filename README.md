CENTOS 6
=============

[setting up an environment](http://sentry.readthedocs.org/en/latest/quickstart/index.html#setting-up-an-environment)

```bash

yum update
yum install python-virtualenv python-virtualenvwrapper

rpm -ql python-virtualenvwrapper
# edit your shell config
# add this line
source /usr/bin/virtualenvwrapper.sh

mkvirtualenv sentry
pip install sentry
# pip install sentry[postgres]
# pip install sentry[mysql]

```

now we can initialize the configuration.

```bash

sentry init
# diy your sentry configuration ~/.sentry/sentry.conf.py
sentry upgrade
sentry createsuperuser
sentry start

```

[composer]

```shell

# global setting
curl -sS https://getcomposer.org/installer | php -- --disable-tls
# or
# php -r "readfile('https://getcomposer.org/installer');" | php -- --disable-tls
mv composer.phar /usr/local/bin/composer

```
