<template>
    <div class="CrateAd">
        <div class="infobox">
            <h2>{{ $t("Announcement.createAd") }}</h2>
            <form action="/createAdService" method="post">
                <input type="hidden" name="_token" :value="this.csrfToken">
                <div class="form-group">
                    <label for="name"><h5>{{ $t("Announcement.name") }}</h5></label>
                    <input v-model="name" class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="price"><h5>{{ $t("Announcement.price") }}</h5></label>
                    <input v-model="price" class="form-control" type="number" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="category"><h5>{{ $t("Announcement.category") }}</h5></label>
                    <select name="category" id="category" class="form-select">
                        <option value="1">{{ $t("Announcement.sport") }}</option>
                        <option value="2">{{ $t("Announcement.children") }}</option>
                        <option value="3">{{ $t("Announcement.clothes") }}</option>
                        <option value="4">{{ $t("Announcement.electrical") }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description"><h5>{{ $t("Announcement.description") }}</h5></label>
                    <textarea v-model="description" class="form-control" type="text" id="description" name="description"></textarea>
                </div>
                <div class="form-group text-center mt-3">
                    <button class="btn" id="submitButton" type="submit">{{ $t("Announcement.createAd") }}</button>
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
#price, #category{
    width: 42%;
}
#description{
    height: 200px;
    width: 589px;
}
.form-group{
    margin: 10px 10px;
}
h5{
    font-size: 25px;
    margin-top: 10px;
    font-family: 'Poiret One', cursive;
}
.form-control, .form-select {
    font-family: 'Palanquin Dark', sans-serif;
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
    box-shadow: 0 3px 5px 0 rgba(0,0,0,0.31);
}
#submitButton{
    margin-top: 20px;
    position:relative;
    width: 45%;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 21px;
    border-radius:3px;
    background-color: #C7B9B7;
    outline: none;
}
</style>
