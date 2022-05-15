<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('faqs')->insert([
       ['id'=>1,'domanda'=> "Domanda1?", 'risposta'=>"Risposta1"],
       ['id'=>2,'domanda'=> "Domanda2?", 'risposta'=>"Risposta2"],
       ['id'=>3,'domanda'=> "Domanda lunghissimissimissimissimissimissima per provare così a caso", 'risposta'=>"RISPOSTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"]
       ]);    // $this->call(UsersTableSeeder::class);
       
       
       DB::table('accomodations')->insert([
           ['id'=>1,'nome'=>"Appartamento carino sul Lago di Garda",'descr'=> "Appartamento accogliente e gradevole. Situato nei pressi del lago, raggiungibile in 3 minuti di macchina. Presenta un giardino ampio e gli interni sono ben arredati con forniture dallo stile del 19 secolo ",
               'tipologia'=>'App','citta'=>"Brescia",'prov'=>"BS",'via'=>"Via T.Tasso",'num_civ'=>80,'sup'=>100,'inizio_disp'=>16-05-2022,'fine_disp'=>19-07-2022,'data_ins'=>15-05-2022,'eta_min'=>18,'eta_max'=>70,'sesso'=>"M",'canone'=>156.00,'posti_letto'=>6,'cucina'=>'true','num_bagni'=>3,'num_camere'=>4,'locale_ricreativo'=>'true','angolo_studio'=>'true',
               'proprietario' => "Giancarlo Magalli"],
           ['id'=>2,'nome'=>"Posto letto su casa di mare",'descr'=> "Camera per studenti. Situata nei pressi di Ancona est, vicinissima al mare. Vicino a punti di snodo per raggiungere le universtià di tutta la città.",
               'tipologia'=>'Pls','citta'=>"Ancona",'prov'=>"AN",'via'=>"Via San Tommaso",'num_civ'=>2,'sup'=>23,'inizio_disp'=>12-10-2022,'fine_disp'=>19-10-2022,'data_ins'=>15-05-2022,'eta_min'=>18,'eta_max'=>27,'sesso'=>"F",'canone'=>15.00,'posti_letto'=>1,'cucina'=>'false','num_bagni'=>1,'num_camere'=>1,'locale_ricreativo'=>'false','angolo_studio'=>'true',
               'proprietario' => "Cristian Notts"],
       ]);
               
       DB::table('users')->insert([
           ['id'=>1,'nome'=>"Matteo",'cognome'=>"Straccia",'data_nasc'=>24-12-1998,'tipologia'=>"Admin",'username'=>"mattew98",'password'=>"ciao1234"],
           ['id'=>2,'nome'=>"Reed",'cognome'=>"Richards",'data_nasc'=>12-04-1978,'tipologia'=>"Host",'username'=>"mrfanta04",'password'=>"suestorm"],
           ['id'=>3,'nome'=>"Norman",'cognome'=>"Osborn",'data_nasc'=>03-08-1981,'tipologia'=>"Loc",'username'=>"greengob1",'password'=>"hatesm"],
           ['id'=>4,'nome'=>"Layla",'cognome'=>"El-Fouly",'data_nasc'=>14-02-1991,'tipologia'=>"Loc",'username'=>"sacarlscarab",'password'=>"dad"]
           
       ]);
               
       DB::table('messages')->insert([
           ['id'=>1,'testo'=>"Salve sono interesato al suo alloggio",'visualizzato'=>"false",'inviato'=>"true",'id_mitt'=>3,'id_dest'=>2,'id_alloggio'=>2],
           ['id'=>2,'testo'=>"Salve sono interesato al suo alloggio",'visualizzato'=>"true",'inviato'=>"true",'id_mitt'=>4,'id_dest'=>2,'id_alloggio'=>2]
           
       ]);
               
       DB::table('photos')->insert([
           ['path'=>"public\images\AppartamentoLagoGardaProva.jpg",'id_alloggio'=>1],
           ['path'=>"public\images\CameraSingolaProva.jpg",'id_alloggio'=>2],  
       ]);
       
       DB::table('options')->insert([
           ['id'=>1,'nota'=>"",'data_invio'=>17-05-2022,'data_inizio'=>13-10-2022,'data_fine'=>19-10-2022,'data_stipula'=>"",'id_alloggio'=>2,'id_locatario'=>3],
           ['id'=>2,'nota'=>"",'data_invio'=>17-05-2022,'data_inizio'=>13-10-2022,'data_fine'=>19-10-2022,'data_stipula'=>"",'id_alloggio'=>2,'id_locatario'=>4]
       ]);
    }
}
