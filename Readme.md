# Timeinc

Steps to follow for running website

1. Install composer
  Composer can be installed as global and local for the project in the system. Download the composer.phar file.
  
  //Downloading the composer.phar file.
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  
  // Checking hash of the file to check no tampering in the data
  php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  
  // Running the setup file
  php composer-setup.php
  
  // Unlinking the file
  php -r "unlink('composer-setup.php');"
  
  // To install for specific directory do the following,
  php composer-setup.php --install-dir=bin
    
  php composer-setup.php --filename=composer ## --filename by default is "composer.phar"
    
  php composer-setup.php --version=1.0.0-alpha8 ## to install specific version
    
  // Global installation, move the composer.phar to /usr/local/bin/composer
    mv composer.phar /usr/local/bin/composer
    
2. Install DAMP stack server using acquia dev desktop. Follow the link to download the file
    https://dev.acquia.com/downloads
    
3. Clone the repository do the followings
     1. Run composer install command - $composer install (It will run 'buil.xml' file)
     2. Create new project using acquia dev desktop by importing web folder project from the cloned repo, note that no need to create
        new database, it's already created by composer. Instead clone database from existing database, and change the database name 
        in build.properties.
     3. Visit localhost to see the website.
     
