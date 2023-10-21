#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Repositorios con subdominio
cd bienesraices
git pull
cd ..
cd DevWebCamp
git pull
cd ..
cd appsalon
git pull
cd ..
cd uptask
git pull
cd ..


# Repositorios sin subdominio
cd no-sub
cd blogdecafe
git pull
cd ..
cd frontendstore
git pull
cd ..
cd rock-edm-festival
git pull
cd ..
cd tienda-muebles
git pull
cd ..

# Volvemos al repositorio raíz
cd ..
