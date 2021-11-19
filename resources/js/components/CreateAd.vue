<template>
    <div class="CrateAd">
        <div class="infobox">
            <h2>Створити оголошення</h2>
            <form action="/createAdService" method="post">
                <input type="hidden" name="_token" :value="this.csrfToken">
                <div class="form-group mt-4">
                    <label for="name"><h5>Назва</h5></label>
                    <input v-model="name" class="form-control" type="text" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group mt-4">
                    <label for="price"><h5>Ціна</h5></label>
                    <input v-model="price" class="form-control" type="number" id="price" name="price" placeholder="Name">
                </div>
                <div class="form-group mt-4">
                    <label for="price"><h5>Опис</h5></label>
                    <input v-model="description" class="form-control" type="text" id="description" name="description" placeholder="Name">
                </div>
                <div class="form-group mt-4">
                    <label for="category"><h5>Категорія</h5></label>
                    <select name="category" id="category" class="form-select">
                        <option value="1">Спортивний інвентар</option>
                        <option value="2">Одяг та аксесуари</option>
                        <option value="3">Товари для дітей</option>
                        <option value="4">Електричні прилади</option>
                    </select>
                </div>
                <div class="form-group text-center mt-3">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateAd",
    data() {
        return {
            name: '',
            price: '',
            description: ''
        }
    },
    computed: {
        csrfToken: function () {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
    },
}
</script>

<style scoped>

h2{
    text-align: center;
    font-family: 'Palanquin Dark', sans-serif;
}
.input__name{

    font-family: 'Palanquin Dark', sans-serif;
    font-size: 20px;
    width: 100%;
}
.massage{
    width : 100%;
    height : 160px;
    font-size: 20px;
}
.thing__info{
    margin-top: 28px;
}
h3{
    font-family: 'Poiret One', cursive;
    font-size: 25px;
}
.select__item{
    width: 40%;
    font-size: 20px;
}
.input__price{
    width: 40%;
    font-size: 20px;
}
.infobox{
    margin: 25px auto;
    max-width: 650px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 15px;
    position: relative;
    text-shadow: none;
}
#submitButton{
    margin-top: 20px;
    position:relative;
    width: 40%;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 21px;
    border-radius:3px;
    background-color: #C7B9B7;
    outline: none;
}
</style>
