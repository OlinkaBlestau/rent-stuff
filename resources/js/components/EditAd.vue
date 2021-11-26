<template>
<div class="EditPageThing">
    <div class="d-flex col-12 form-edit container justify-content-center">
        <form :action=editServiceLink method="post">
            <input type="hidden" name="_token" :value="this.csrfToken">
            <h1 class="title mb-3 fw-normal text-center">{{ $t("Announcement.editAd") }}</h1>
            <div class="form-group">
                <label for="name"><h5>{{ $t("Announcement.name") }}</h5></label>
                <input v-model="name" type="text" :class="'form-control '" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="price"><h5>{{ $t("Announcement.price") }}</h5></label>
                <input v-model="price" type="number" :class="'form-control '" id="price" name="price">
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
                <textarea v-model="description" class="form-control" type="text" id="description" name="description"></textarea>            </div>
            <div class="form-group text-center">
                <button class="btn" type="submit"  id="submitButton">{{ $t("Announcement.btnSave") }}</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {
    name: "EditAd",
    props: {
        thing: {}
    },
    data() {
        return {
            thingData: JSON.parse(this.thing),
            name: "",
            price: "",
            category: "",
            description: "",
            phone: "",
            address: "",
        }
    },
    updated() {

    },
    computed: {
        csrfToken: function () {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
        editServiceLink: function () {
            return `/editThingService/${this.thingData.id}`
        }
    },
    mounted() {
        this.name = this.thingData.Name;
        this.price = this.thingData.Price;
        this.category = this.thingData.Category;
        this.description = this.thingData.Description;

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

.EditPageThing{
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
