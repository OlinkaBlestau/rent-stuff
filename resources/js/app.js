/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue').default;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import 'material-icons/iconfont/material-icons.css';
import VueI18n from 'vue-i18n'

Vue.use(VueI18n)

const messages = {
    en: {
        navbar: {
            main: 'Main',
            opportunities: 'Opportunities',
            help: 'Help',
            contact: 'Contacts',
            enter: 'Enter',
            profile: 'Profile',
            myProfile: 'My profile',
            myAd: 'My announcement',
            createAd: 'Create announcement',
            support: 'Support services',
            exit: 'Exit'
        },

        mainPages: {
            rentalService: 'rental service',
            createAd: 'Create announcement',
            possibleToRent: 'It can be rented',
            sport: 'Sport equipment',
            children: 'Goods for children',
            clothes: 'Clothes and accessories',
            electrical: 'Electrical goods',
            help: 'Help',
            contact: 'Contacts',
            socialNet: 'Social networks',
            ourEmail: 'Our e-mail',


            text:{
                modernPlatform: 'RentStuff - a modern platform for renting and leasing a variety of things.',
                instruction: 'Instructions for use:',
                li1: 'Landlords are using the Web version.',
                li2: 'Tenants use the Android version and partly the Web version.',
                li3: 'he landlord must be registered to place ads.',
                li4: 'In order to view and respond to advertisements, the tenant must be registered.',
                li5: 'If you have any questions or problems, please contact ',
                a: 'support services'
            }
        },

        formEnter:{
            enter: 'Sign up',
            email: 'E-mail',
            password: 'Password ',
            btnEnter: 'Enter',
            href: 'Create account',
        },

        formRegistration:{

            signIn: 'Sign in',
            name: "Name",
            surname: 'Surname',
            email: 'E-mail',
            password: 'Password',
            phone:'Phone',
            address: 'Address',
            choseRole: 'Are you a landlord or tenant',
            landlord: 'Landlord',
            tenant: 'Tenant',
            btnEnter: 'Enter',
            href: 'already have an account'
        },

        formViewProfile:{

            name: "Name",
            surname: 'Surname',
            email: 'E-mail',
            phone:'Phone',
            address: 'Address',
            password: 'Password',
            btnEdit: 'Edit'
        },

        formEditProfile:{

            changeInfo: 'Change information',
            name: "Name",
            surname: 'Surname',
            email: 'E-mail',
            phone:'Phone',
            address: 'Address',
            password: 'Password',
            btnSave: 'Save'
        },

        formSupport:{

            title: 'Send message',
            subtitle: 'In case of a problem or question, send us a message, the answer will be sent to you by mail',
            name: "Name",
            surname: 'Surname',
            email: 'E-mail',
            message: 'Message',
            href: 'Send'
        },

        Announcement:{

            createAd: 'Create announcement',
            yourAd: 'Your Ads',
            editAd: 'Edit announcement',
            name: "Name:",
            price: 'Price:',
            category: 'Category:',
            sport: 'Sport equipment',
            children: 'Goods for children',
            clothes: 'Clothes and accessories',
            electrical: 'Electrical goods',
            description: 'Description',
            btnSave: 'Save'
        }
    },
    ua: {
        navbar: {
            main: 'Головна',
            opportunities: 'Можливості',
            help: 'Допомога',
            contact: 'Контакти',
            enter: 'Увійти',
            profile: 'Профіль',
            myProfile: 'Мій профіль',
            myAd: 'Мої оголошення',
            createAd: 'Сторити оголошення',
            support: 'Служба підтримки',
            exit: 'Вихід',

        },

        mainPages: {
            rentalService: 'сервіс оренди',
            createAd: 'Створити оголошення',
            possibleToRent: 'Можливо здати в оренду',
            sport: 'Спортивний інвентар',
            children: 'Твовари для дітей',
            clothes: 'Одяг та аксесуари',
            electrical: 'Електричні прилади',
            help: 'Допомога',
            contact: 'Контакти',
            socialNet: 'Соціальні мережі',
            ourEmail: 'Реклама та співпраця',

            text:{
                modernPlatform: 'RentStuff - сучасна платформа для оренди та здачі в оренду різноманітних речей.',
                instruction: 'Інструкція користування:',
                li1: 'Орендодавці користуються Web - версією.',
                li2: 'Оредарі користуються Android - версією та частково Web - версією.',
                li3: 'Для розміщення оголошень орендодавцю треба бути зареєстрованим (-ою).',
                li4: 'Для того щоб переглядати та відповідати на оголошення, орендарю треба бути зареєстрованим (-ою).',
                li5: 'При винекненні запитань чи проблем зверніться до ',
                a: 'служби підтримки'
            }
        },

        formEnter:{
            enter: 'Вхід',
            email: 'Електронна пошта',
            password: 'Пароль',
            btnEnter: 'Увійти',
            href: 'Створити акаунт'
        },

        formRegistration:{

            signIn: 'Реєстрація',
            name: "Ім'я",
            surname: 'Прізвище',
            email: 'Електронна пошта',
            password: 'Пароль',
            phone:'Номер телефону',
            address: 'Адреса',
            choseRole: 'Ви орендатор чи орендодавець',
            landlord: 'Орендодавець',
            tenant: 'Орендатор',
            btnEnter: 'Увійти',
            href: 'Вже маю акаунт'
        },

        formViewProfile:{

            name: "Ім'я",
            surname: 'Прізвище',
            email: 'Електронна пошта',
            phone:'Номер телефону',
            address: 'Адреса',
            password: 'Пароль',
            btnEdit: 'Редагувати'
        },

        formEditProfile:{

            changeInfo: 'Змініть інформацію про себе',
            name: "Ім'я",
            surname: 'Прізвище',
            email: 'Електронна пошта',
            phone:'Номер телефону',
            address: 'Адреса',
            password: 'Пароль',
            btnSave: 'Зберігти'
        },

        formSupport:{

            title: 'Надішліть повідомлення',
            subtitle: 'У разі винекнення проблеми чи запитань надішліть нам повідомлення, відповідь буде надіслана вам на пошту',
            name: "Ім'я",
            surname: 'Прізвище',
            email: 'E-mail',
            message: 'Повідомлення',
            href: 'Надіслати'
        },

        Announcement:{

            yourAd: ' Ваші оголошення',
            createAd: 'Створити оголошення',
            editAd: 'Редагувати оголошення',
            name: "Назва:",
            price: 'Ціна:',
            category: 'Категорія:',
            sport: 'Спортивний інвентар',
            children: 'Твовари для дітей',
            clothes: 'Одяг та аксесуари',
            electrical: 'Електричні прилади',
            description: 'Опис',
            btnSave: 'Зберігти'
        }
    }
}

const i18n = new VueI18n({
    locale: 'en', // set locale
    messages, // set locale messages
})

//defined as global component
Vue.component('main-page', require('./components/Main.vue').default);
Vue.component('landlord-page', require('./components/landLord.vue').default);
Vue.component('V-MaterialIcon', require('vue-materials-icon/MaterialIcon').default);
Vue.component('tenant-page', require('./components/Tenant.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('create-ad', require('./components/CreateAd.vue').default);
Vue.component('profile-landlord', require('./components/ViewProfileLandlord.vue').default);
Vue.component('edit-landlord', require('./components/EditProfileLandlord.vue').default);
Vue.component('support', require('./components/Support.vue').default);
Vue.component('view-ad', require('./components/ViewAd.vue').default);
Vue.component('edit-ad', require('./components/EditAd.vue').default);
Vue.component('profile', require('./components/Profile.vue').default);

Vue.component('sign-up', require('./components/SignUp.vue').default);
Vue.component('sign-in', require('./components/SignIn.vue').default);
Vue.component('ad', require('./components/Ad.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    i18n,
    el: '#app',
});

const navbar = new Vue({
    i18n,
    el: '#navbar',
})

if(localStorage.getItem('locale') !== null) {
    i18n.locale = localStorage.getItem('locale');
}
