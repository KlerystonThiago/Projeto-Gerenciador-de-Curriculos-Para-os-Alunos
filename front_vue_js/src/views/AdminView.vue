<template>
   <div class="page_curriculo">
      <header class="admin_header">
         <div class="box_header">            
            <div class="resume">
               <h1>
                  PAINEL ADMINISTRATIVO
               </h1>
               <p>
                  GERENCIE AQUI OS DADOS DO SEU CURRICULO
               </p>
            </div>
         </div>
      </header>
      <main>
         <div class="box_main" style="flex-direction: column;">                   
            <div class="box_right">
               <h1 class="titles_main">HEADER</h1>
               <div class="division"></div>    
               <div class="form_header" style="display: flex; justify-content: space-between;">
                  <input type="text" name="" id="" style="height: 30px; border-radius: 5px; border: 1px solid #b1a38d; width: 32%;">
                  <input type="text" name="" id="" style="height: 30px; border-radius: 5px; border: 1px solid #b1a38d; width: 32%;">
                  <input type="text" name="" id="" style="height: 30px; border-radius: 5px; border: 1px solid #b1a38d; width: 32%;">
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