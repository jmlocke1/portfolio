#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Repositorios con subdominio
git clone git@github.com:jmlocke1/DevWebCamp.git
git clone git@github.com:jmlocke1/bienesraices.git
git clone git@github.com:jmlocke1/appsalon.git
git clone git@github.com:jmlocke1/uptask.git


# Repositorios sin subdominio
cd no-sub
git clone git@github.com:jmlocke1/blogdecafe.git
git clone git@github.com:jmlocke1/frontendstore.git
git clone git@github.com:jmlocke1/rock-edm-festival.git
git clone git@github.com:jmlocke1/tienda-muebles.git
# Volvemos al repositorio raíz
cd ..
