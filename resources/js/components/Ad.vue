<template>
    <div class="infobox">
        <div class="thing__img">
            <img class="images" src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/257392082_3061424120852142_8626919439283653651_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=fbXEpIIo14sAX9S4oS1&_nc_ht=scontent.fhrk2-1.fna&oh=f80c2cd936e8c93f7835d9f96cf893df&oe=61997E6E" alt="">
        </div>
        <div class="name">
            <h5 class="title">Назва:</h5>
            <p>{{ name }}</p>
        </div>
        <div class="name">
            <h5 class="title">Ціна:</h5>
            <p>{{ price }}</p>
        </div>
        <div class="name">
            <h5 class="title">Категорія:</h5>
            <p>{{ category }}</p>
        </div>
        <div class="name">
            <h5 class="title">Опис:</h5>
            <p>{{ description }}</p>
        </div>
        <div class="btn-new">
            <a id="deleteButton" :href=deleteThing type="submit" class="btn"><img class="icon" src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png" alt=""></a>
        </div>
        <div class="btn-new">
            <a id="editButton" href="#" type="submit" class="btn"> <img class="icon" src="https://t3.ftcdn.net/jpg/01/07/62/08/240_F_107620831_1Z8lQg6d7DY782MlV1L3gNt2HDAn2j7u.jpg" alt=""></a>
        </div>
        <div class="btn-new">
            <a id="newButton" href="/CreateAd" type="submit" class="btn"> <img class="icon" src="https://cdn-icons-png.flaticon.com/128/628/628586.png" alt=""></a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Ad",
    props: {
        id: '',
        name: '',
        price: '',
        category: '',
        description: '',
    },
    computed: {
        deleteThing: function () {
            return '/deleteThing/' + this.id;
        }
    }
}
</script>

<style scoped>
    h1 {
        text-align: center;
        margin-top: 40px;
    }
    .icon{
        width: 40px;
        height: 40px;
    }
    p {

    }
    #editButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 40px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    #deleteButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 180px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    #newButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 317px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    h3 {
        font-family: 'Poiret One', cursive;
        font-size: 25px;
    }

    .images {
        margin: 20px 20px;
        width: 360px;
        position: absolute;
    }
    title {
        position: absolute;

    }
    .name {
        margin: 0 410px 25px;
    }
    .infobox {
        margin: 25px auto;
        width: 1500px;
        height: 365px;
        padding: 40px 20px;
        background: #E3DBDA;
        border-radius: 15px;
        position: relative;
        text-shadow: none;
    }

</style>
