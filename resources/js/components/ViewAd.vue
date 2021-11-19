<template>
    <div class="ViewAd">
        <h1> Ваші оголошення</h1>
        <ad
            v-for="thing in thingsData"
            :key="thing.index"
            :id="thing.id"
            :name="thing.Name"
            :price="thing.Price"
            :category="thing.Id_Category"
            :description="thing.Description"
        />
    </div>
</template>

<script>
export default {
    name: "ViewAd",
    props: {
        things: []
    },
    data() {
        return {
            thingsData: JSON.parse(this.things),
        }
    }
}
</script>

<style scoped>
h1{
    text-align: center;
    margin-top: 40px;
}
.icon{
    width: 40px;
    height: 40px;
}
p{

}
#editButton{
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
#deleteButton{
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
#newButton{
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
h3{
    font-family: 'Poiret One', cursive;
    font-size: 25px;
}

.images{
    margin: 20px 20px;
    width: 360px;
    position: absolute;
}
title{
    position: absolute;

}
.name{
    margin: 0 410px 25px;
}
.infobox{
    margin: 25px auto;
    width: 1500px;
    height: 365px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 15px;
    position: relative;
    text-shadow: none;
}

</style>
