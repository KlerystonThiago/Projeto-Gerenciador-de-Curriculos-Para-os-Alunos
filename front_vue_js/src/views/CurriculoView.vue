<template>
   <div class="page_curriculo">
      <header>
         <div class="box_header">
            <div class="avatar">
               <figure>
                  <img :src="data.header.avatar">
                  <figcaption>KT</figcaption>
               </figure>
            </div>
            <div class="resume">
               <h1>
                  {{ data.header.name }}
               </h1>
               <p>
                  {{ data.header.profession }}
               </p>
               <p>
                  {{  data.header.resume }}
               </p>
            </div>
         </div>
      </header>
      <main>
         <div class="box_main">
            <div class="box_left">            
               <section>
                  <h1 class="titles_main">CONTATOS</h1>
                  <div class="division"></div>                  
                  <div v-for="contact in data.contacts" class="box_left_section_content">
                     <i :class="contact.icon"></i>
                     <p>{{ contact.content }}</p>
                  </div>                 
               </section>            
            
               <section>
                  <h1 class="titles_main">FORMAÇÕES</h1>
                  <div class="division"></div>
                  <div v-for="education in data.educations" class="box_left_section_content">
                     <section class="formation">
                        <p>
                           {{ education.formation }}                           
                        </p>
                        <p>
                           {{ education.university }}                           
                        </p>
                        <p>
                           {{ education.date }}
                        </p>
                     </section>
                  </div>                  
               </section>  
               <section>
                  <h1 class="titles_main">HABILIDADES</h1>
                  <div class="division"></div>
                  <div class="box_left_section_content skills">
                     <p v-for="skill in data.skills">
                        {{ skill }}
                     </p>                                     
                  </div>               
               </section> 
               <section>
                  <h1 class="titles_main">INTERESSES</h1>
                  <div class="division"></div>
                  <div v-for="interest in data.interests" class="box_left_section_content">
                     <div class="marker"></div>
                     <p>{{ interest }}</p>
                  </div>                  
               </section>  
               <section>
                  <h1 class="titles_main">IDIOMAS</h1>
                  <div class="division"></div>
                  <div v-for="language in data.languages" class="box_left_section_content">
                     <section class="formation">
                        <p>
                           {{ language }}                        
                        </p>
                     </section>
                  </div>                  
               </section>  
            </div>
            <div class="box_right">
               <h1 class="titles_main">EXPERIÊNCIA PROFISSIONAL</h1>
               <div class="division"></div>
               
               <div class="sections_contents">
                  <section v-for="experience in data.professionalexperience">
                     <div class="col_left">                     
                        <div class="timelapse_marker"></div>
                        <div class="timelapse_vertical_line"></div>
                     </div>
                     <div class="col_right">
                        <section>
                           <h1>
                              {{ experience.job }}
                           </h1>
                           <span>{{ experience.date }}</span>
                           <p>
                              {{ experience.description }}
                           </p>
                        </section>
                     </div>
                  </section>                  
               </div>

               <h1 class="titles_main mp-1">REFERENCIAS PROFISSIONAIS</h1>
               <div class="division"></div> 
               
               <div class="references_container">
                  <section v-for="reference in data.references">
                     <div class="brand">{{ reference.brand }}</div>
                     <div v-for="people in reference.referencepeoples" class="reference">
                        <h2>{{ people.reference }}</h2>
                        <p>{{ people.work }}</p>
                        <p>{{ people.companyname }}</p>
                        <p>{{ people.emailreference }}</p>
                     </div>                     
                  </section>
               </div>
            </div>
         </div>
      </main>
   </div>
</template>

<script setup>
   import { onMounted, ref } from 'vue'
   import { api } from '../services/api'

   let data = ref({
      header: {
         name: "",
         profession: "",
         resume: "",
         iniciations: "",
         avatar: ""
      },
      contacts: [
         {
            icon: "",
            email: ""
         }
      ],      
      educations: [
         {
            formation: "",
            university: "",
            date: ""
         }
      ],
      skills: [],
      interests: [],
      languages: [],
      professionalexperience: [
         {
            job: "",
            time: "",
            description: ""
         }
      ],
      references: [
         {
            brand: "",      
            people: [
               {
                  reference: "",
                  work: "",
                  companyname: "",
                  emailreference: ""
               }
            ]       
         }      
      ]
   })

   const curriculum = () => {
      api.get('/curriculo')
      .then(function (response) {        
         data.value = response.data.data;
         console.log(response.data.data); 
      });
   }

   onMounted(() => {
      curriculum()
   });
</script>