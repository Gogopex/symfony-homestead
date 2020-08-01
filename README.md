# Boilerplate to set up a `Symfony` project with a VM using `Homestead`.


> Symfony 5 project, Homestead v10

> Includes basic reset + sanitize less files


## Prerequisites
```
virtualbox

vagrant >= 1.9.5

vagrant plugin install vagrant-bindfs
```

## Install 
The first step is to install homestead so that the project can build the virtual machine properly.

- `composer install`

Note: this is the first and only time you'll be running `composer` outside of the VM. 👍

- `mv Homestead.yaml.example Homestead.yaml`
- open `Homestead.yaml` 
  - replace `{{name_of_your_projet}}` by the name of your project
  - replace `{{name_of_your_database}}` by the name of your database
- `mv .env.test .env`

- `vagrant up`
- `vagrant ssh`
- cd /{{name_of_your_project}}
- composer install
- access {{name_of_your_project}}.test

You can find out more about Homestead and how to configure it here:
[Homestead doc](https://laravel.com/docs/7.x/homestead)


