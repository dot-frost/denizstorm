# Project DenizStorm
### video Demo: <https://youtu.be/xd9f274C55g>
**creators dot-frost, AminDenizer, sanaey**
**GitHub Those who were involved in building this project**
**[AminDenizer](https://github.com/AminDenizer/)**         
**[dot-frost](https://github.com/dot-frost)**
**[sanaey](https://github.com/sanaey/)**

##### requirement for Start up :
1 install docker
2 export GID=$(id -g)
3 docker-compose -f docker-production.yml up -d
4 docker-compose exec php composer install --no-dev
5 cp application/.env.example application/.env
6 docker-compose exec php php artisan storage:link
7 docker-compose exec php php artisan migrate --seed
8 localhost/login
9 user : admin@admin.com
10 password: adminadmin
##### Description:
***this site is in persian languege***
**Why did we decide to design a site to build a custom computer?**
*Because in my country there is no site to build a custom computer or if there is, it is not enough We have created this site so that the user can use it easily and have a share in making and selecting the computer products he wants.*

**What features are simplified by using the site**
*Well, there are many features that can be simplified using this site*
* Compare parts
* Updated products
* Easy order registration
* Easy to use for the user
* Can be used anywhere without the need to go to the market

**USES**
***What languages and frameworks have been used to build this site?***
*Html, css, bootstrap, jQuery and Laravel framework of php has been used to build this site*


**Smooth Scroll**
*Automatic scrolling between pages with jQuery*

***DenizStorm means sea storm for me Sea storms rarely happen, but when they do they start with strength.***
*In short, we intend to do a very powerful and professional job in the field of computer assembly and customization.*

**Description of the site**
*The description of the site is simple because we tried to make the site easy to use
Users can refer to the **EasyPZPC** section to select their desired computer and
order their desired computer by answering a few questions and selecting computer products.*

**Now I want to explain the order part of the pc**
*The site asks a series of specific questions from the user and shows a series of products to the user. And asks the user to choose products in each part of his taste*

**part 1**
**In this section, to help the user to make a better choice, a warning about the difference mid tower and a full tower is displayed.**
Select the case type
* Full Tower 
* Mid Tower

**part 2**
Number of HDD & SSD compartments
* standard
* midia
* professional

**part 3**
Select your system motherboard

**part 4**
Select your system CPU 
***In this section, CPUs are displayed depending on the user's choice. For example, if a motherboard that supports Intel Tenth Series is selected, only Intel 10 Series processors will be displayed or Or depending on the platform that the motherboard supports, such as Intel and AMD, for example, if the user chooses a motherboard that supports AMD, only the AMD CPUs will be displayed in the CPU selection list and another ruls for this section***

**part 5**
Select your system memory

**part 6**
Select your system GPU

**part 7**
After performing all the above steps, the user will receive the ordered products along with the price by clicking on the submit button.

**part 8**
In this section, information is taken from the user from the name and surname and address and email address and contact number and A brief explanation of what you think should be said to improve the appearance of your system

**part 9**
See a list of selected parts

# The End
