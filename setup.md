# настройка среды выполнения

Что нам нужно:

Для внешней среды
- VSCode
- symfony client
- php 8.2
- composer
- Настройка файла hosts

Для внутренней среды
- Debian 12
- php 8.2
- База данных MySQL 5.7
- nginx
- composer.phar

## Установка VSCode

<https://code.visualstudio.com>

## Установка Symfony client

<https://symfony.com/download>

Binaries
Download binaries from GitHub: 386, amd64.

## Установка php8.2 для Windows

<https://www.php.net/downloads>

## Установка Composer

<https://getcomposer.org/download/>

Download and run Composer-Setup.exe - it will install the latest composer version whenever it is executed.

## Установка Debian

1. Загрузка VMware Workstation Player. Осуществляется по ссылке с официального сайта: **https://customerconnect.vmware.com/en/downloads/info/slug/desktop_end_user_ computing/vmware_workstation_player/17_0** . Установка производится стандартно. Лицензия бесплатная для некоммерческого использования. 
2. Создание ВМ: Create a New Virtual Machine –> Installer disc image file (выбрать установочный iso-образ **Debian (debian-testing-amd64-netinst.iso)** –> Guest operating system: Linux –> Version: **Debian 10.x 64-bit** –> Virtual machine name: VM_GB_Visualization –> Maximum disk size: 20.0 GB –> Split virtual disk into multiple files.  

   <https://cdimage.debian.org/cdimage/daily-builds/daily/arch-latest/amd64/iso-cd/debian-testing-amd64-netinst.iso>

   <https://cdimage.debian.org/debian-cd/current/amd64/iso-cd/>
3.  Пара моментов, которые необходимо отметить: обязательная установка пароля для root-пользователя, так как все операции будут выполняться под ним; а также выбор устанавливаемых компонентов, который задается почти в самом конце установки, должен включать только SSH server  

   Остальные галочки снять

   root - пароль

4. Как только получилось авторизоваться, немножко настроим и почистим систему. 

```
nano /etc/ssh/sshd_config

Ищем закомментированную строку #PermitRootLogin prohibit-password и правим в это: PermitRootLogin yes

systemctl restart ssh || systemctl restart sshd
ip a

в стандартной системе в командной строке
ssh root@192.168.1.59
```

## Установка mc
```
sudo apt install mc
```

## Установка nano
```
sudo apt install nano
```

## Установка php8.2 под Debian

<https://tecadmin.net/how-to-install-php-on-debian-12/>


## Установка mysql 5.7, можно 8.0

<https://iamsto.wordpress.com/2023/12/18/howto-install-mysql5-7-on-debian-12-bookworm/>

Чтобы поменять пароль
```
sudo mysql

ALTER USER 'root'@'localhost' IDENTIFIED BY 'password';

exit;

mysql -u root -p

# Создать пользователя для подключения с удаленного компьютера
CREATE USER 'root'@'192.168.1.x' IDENTIFIED BY 'some_pass';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'192.168.1.x';
```

## Установка nginx

```
sudo apt install nginx
```

## Скачать composer, поместить потом в папку проекта

<https://getcomposer.org/download/latest-stable/composer.phar>


## Настройки ufw для вывода портов наружу

```
sudo apt install ufw

ufw allow from 192.168.1.x to any port 9200
ufw allow from 192.168.1.x to any port 3306
ufw allow from 192.168.1.x to any port 22

ufw enable

Настройки программ
# mysql
mysqld bind-address = 0.0.0.0
```

## Подключаем папку к виртуальной машине
C:\nata\git-nata\genealogy
genealogy
/var/www/genealogy


