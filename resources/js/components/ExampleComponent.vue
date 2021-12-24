<template>
    <div>
        <section>
            <vue-horizontal-list :items="items" :options="options">
                <template v-slot:default="{ item }">
                    <div>
                      <div class="image-container">
                          <div class="image-content">
                          <img :src="item.image" />

                          <div class="image-text">
                              <h2>{{ item.title }}</h2>
                          </div>
                          </div>
                      </div>
                      <p>{{ item.content }}</p>
                    </div>
                </template>
            </vue-horizontal-list>
            <div style="text-align: center;">
              <h2>OUR SPONSORS</h2>
            </div>
        </section>
    </div>
</template>

<script>
//import Vue from "vue";

import VueHorizontalList from 'vue-horizontal-list';

export default {
    components: { VueHorizontalList },
    data() {
        return {
            options: {
                responsive: [
                { end: 576, size: 1 },
                { start: 576, end: 768, size: 2 },
                { start: 768, end: 992, size: 3 },
                { size: 4 },
                ],
                list: {
                // 1200 because @media (min-width: 1200px) and therefore I want to switch to windowed mode
                windowed: 1200,

                // Because: #app {padding: 80px 24px;}
                padding: 24,
                },
                position: {
                start: 2,
                },
                autoplay: { play: true, repeat: true, speed: 2500 },
            },
            items: [
                { title: "Sponsor 1", content: "Content item with description", image:"/img/sponsors_image/sponsor1.jpg"},
                { title: "Sponsor 2", content: "Content item with description" , image:"/img/sponsors_image/sponsor2.jpg"},
                { title: "Sponsor 3", content: "Content item with description" , image:"/img/sponsors_image/sponsor3.jpg"},
                { title: "Sponsor 4", content: "Content item with description" , image:"/img/sponsors_image/sponsor4.jpg"},
                { title: "Sponsor 5", content: "Content item with description" , image:"/img/sponsors_image/sponsor5.jpg"},
                { title: "Sponsor 6", content: "Content item with description" , image:"/img/sponsors_image/sponsor6.jpg"},
            ],
        };
    },
};
</script>

<style scoped>
p,
h3,
h2 {
  margin-top: 4px;
  overflow: hidden;
  display: -webkit-box;
  text-overflow: ellipsis;
  word-break: break-word;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
}
.subtitle {
  margin-top: 10px;
  font-size: 12px;
  font-weight: 600;
  color: black;
  margin-bottom: 8px;
}
.image-container {
  border-radius: 3px;
  overflow: hidden;
  position: relative;
  width: 100%;
  padding-top: 120%;
}
.image-content {
}
.image-text {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  padding: 32px 24px;
  display: flex;
  align-items: flex-end;
  background: rgba(0, 0, 0, 0.4);
}
.image-text h2 {
  margin: 0;
  color: white;
  text-align: center;
}
img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
</style>
