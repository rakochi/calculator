FROM linuxconfig/apache
MAINTAINER Lubos Rendek <web@linuxconfig.org>

ENV DEBIAN_FRONTEND noninteractive

# Main package installation
RUN apt-get update
RUN apt-get -y install supervisor libapache2-mod-php5 php5-mysql mysql-server

# Extra package installation
RUN apt-get -y install php5-gd php-apc php5-mcrypt

#Add files from directory
COPY . /var/www/html

#Remove anything unnecessary
RUN apt-get autoremove

# Configure MySQL
#RUN sed -i 's/bind-address/#bind-address/' /etc/mysql/my.cnf

# Create new MySQL admin user
#RUN service mysql start; mysql -u root -e "CREATE USER 'admin'@'%' IDENTIFIED BY 'pass';";mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION;"; 

#Start MySQL
#RUN service mysql start
#RUN mysql

#Create database and table
#RUN mysql < /var/www/html/startup.sql 

