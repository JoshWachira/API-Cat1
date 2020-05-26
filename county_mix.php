<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here
$county_array =array  (  array('#'=> '1',
'Name'=> 'Mombasa','Governor'=>'Hassan Ali Joho <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://mombasa.go.ke">http://mombasa.go.ke</a>'),
                        array('#'=> '2',
'Name'=> 'Kwale','Governor'=>'Salim Mvurya <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://kwale.go.ke">http://kwale.go.ke</a>'),
                        array('#'=> '3',
'Name'=> 'Kilifi','Governor'=>'Amason Jeffah Kingi <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://kilifi.go.ke">http://kilifi.go.ke</a>'),
                        array('#'=> '4',
'Name'=> 'Tana River','Governor'=>'Dhadho Godana <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://tanariver.go.ke">http://tanariver.go.ke</a>'),
                        array('#'=> '5',
'Name'=> 'Lamu','Governor'=>'Fahim Yasin Twaha <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://kwale.go.ke">http://kwale.go.k</a>'),
                        array('#'=> '6',
'Name'=> 'Taita-Taveta','Governor'=>'Granton Samboja <img width="20%"src="images/wiper.jpg"/>',  'Website' => '<a href="http://taitataveta.go.ke">http://taitataveta.go.ke</a>'),

                           array('#'=> '7',
'Name'=> 'Garissa','Governor'=>'Ali Bunow Korane <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://garissa.go.ke">http://garissa.go.ke</a>'),
                           array('#'=> '8',
'Name'=> 'Wajir','Governor'=>'Mohamed Abdi Mohamud <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://wajir.go.ke">http://wajir.go.ke</a>'),
                           array('#'=> '9',
'Name'=> 'Mandera','Governor'=>'Ali Ibrahim Roba <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://mandera.go.ke">http://mandera.go.ke</a>'),
                           array('#'=> '10',
'Name'=> 'Marsabit','Governor'=>'Mohamud Mohamed Ali <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://marsabit.go.ke">http://marsabit.go.ke</a>'),
                           array('#'=> '11',
'Name'=> 'Isiolo','Governor'=>'Mohamed Abdi Kuti <img width="20%"src="images/independent.png"/>',  'Website' => '<a href="http://isiolo.go.ke">http://isiolo.go.ke</a>'),
                           array('#'=> '12',
'Name'=> 'Meru','Governor'=>'Kiraitu Murungi <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://meru.go.ke">http://meru.go.ke</a>'),

                             array('#'=> '13',
'Name'=> 'Tharaka Nithi','Governor'=>'Muthomi Njukii <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://tharakanithi.go.ke">http://tharakanithi.go.ke</a>'),
                             array('#'=> '14',
'Name'=> 'Embu','Governor'=>'Martin Nyaga Wambora <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://embu.go.ke">http://embu.go.ke</a>'),
                             array('#'=> '15',
'Name'=> 'Kitui','Governor'=>'Charitu Ngilu <img width="20%"src="images/narc.jpeg"/>','Website' => '<a href="http://kitui.go.ke">http://kitui.go.ke</a>'),
                             array('#'=> '16',
'Name'=> 'Machakos','Governor'=>'Alfred Mutua <img width="20%"src="images/ccm.jpg"/>',  'Website' => '<a href="http://machakos.go.ke">http://machakos.go.ke</a>'),
                             array('#'=> '17',
'Name'=> 'Makueni','Governor'=>'Kivutha Kibwana <img width="20%"src="images/wiper.jpg"/>','Website' => '<a href="http://makueni.go.ke">http://makueni.go.ke</a>'),
                             array('#'=> '18',
'Name'=> 'Nyandarua','Governor'=>'Francis Kimemia <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://nyandarua.go.ke">http://nyandarua.go.ke</a>'),

                               array('#'=> '19',
'Name'=> 'Nyeri','Governor'=>'Mutahi Kahiga <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://nyeri.go.ke">http://nyeri.go.ke</a>'),
                               array('#'=> '20',
'Name'=> 'Kirinyaga','Governor'=>'Anne Waiguru <img width="20%"src="images/jubilee.png"/>', 'Website' => '<a href="http://kirinyaga.go.ke">http://kirinyaga.go.ke</a>'),
                               array('#'=> '21',
'Name'=> 'Muranga','Governor'=>'Mwangi wa Iria <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://muranga.go.ke">http://muranga.go.ke</a>'),
                               array('#'=> '22',
'Name'=> 'Kiambu','Governor'=>'Ferdinand Waititu <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://kiambu.go.ke">http://kiambu.go.ke</a>'),
                               array('#'=> '23',
'Name'=> 'Turkana','Governor'=>'Josphat Nanok <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://turkana.go.ke">http://turkana.go.ke</a>'),
                               array('#'=> '24',
'Name'=> 'West Pokot','Governor'=>'John Lonyangapuo <img width="20%"src="images/kanu.jpg"/>',  'Website' => '<a href="http://westpokot.go.ke">http://westpokot.go.ke</a>'),

                                 array('#'=> '25',
'Name'=> 'Samburu','Governor'=>'Moses Kasainie Lenolkulal <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://samburu.go.ke">http://samburu.go.ke</a>'),
                                 array('#'=> '26',
'Name'=> 'Trans-Nzoia','Governor'=>'John Khaemba <img width="20%"src="images/ford.jpg"/>',  'Website' => '<a href="http://transnzoia.go.ke">http://transnzoia.go.ke</a>'),
                                 array('#'=> '27',
'Name'=> 'Uasin Gishu','Governor'=>'Jackson Mandago <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://uasingishu.go.ke">http://uasingishu.go.ke</a>'),
                                 array('#'=> '28',
'Name'=> 'Elgeyo Marakwet','Governor'=>'Alex Tanui Tolgas <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://elgeyomarakwet.go.ke">http://elgeyomarakwet.go.ke</a>'),
                                 array('#'=> '29',
'Name'=> 'Nandi','Governor'=>'Stephen Sang <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://nandi.go.ke">http://nandi.go.ke</a>'),
                                 array('#'=> '30',
'Name'=> 'Baringo','Governor'=>'Stanley K Kipris <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://baringo.go.ke">http://baringo.go.ke</a>'),

                                   array('#'=> '31',
'Name'=> 'Laikipia','Governor'=>'Ndiritu Muriithi <img width="20%"src="images/independent.png"/>','Website' => '<a href="http://laikipia.go.ke">http://baringo.go.ke</a>'),
                                   array('#'=> '32',
'Name'=> 'Nakuru','Governor'=>'Lee Kinyanjui <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://nakuru.go.ke">http://nakuru.go.kee</a>'),
                                   array('#'=> '33',
'Name'=> 'Narok','Governor'=>'Samuel Kuntai Ole Tunai <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://narok.go.ke">http://narok.go.ke</a>'),
                                   array('#'=> '34',
'Name'=> 'Kajiado','Governor'=>'Samuel Ole Lenku <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://kajiado.go.ke">http://kajiado.go.ke</a>'),
                                   array('#'=> '35',
'Name'=> 'Kericho','Governor'=>'Prof. Paul Chepkwony Kiprono <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://kericho.go.ke">http://kericho.go.ke</a>'),
                                   array('#'=> '36',
'Name'=> 'Bomet','Governor'=>'Hillary Barchok <img width="20%"src="images/jubilee.png"/>',  'Website' => '<a href="http://bomet.go.ke">http://bomet.go.ke</a>'),

                                     array('#'=> '37',
'Name'=> 'Kakamega','Governor'=>'Wycliffe Oparanya <img width="20%"src="images/odm.png"/>','Website' => '<a href="http://kakamega.go.ke">http://kakamega.go.ke</a>'),
                                     array('#'=> '38',
'Name'=> 'Vihiga','Governor'=>'Wilber Ottichilo <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://vihiga.go.ke">http://vihiga.go.ke</a>'),
                                     array('#'=> '39',
'Name'=> 'Bungoma','Governor'=>'Wyclife Wafula Wangamiti <img width="20%"src="images/odm.png"/>','Website' => '<a href="http://bungoma.go.ke">http://bungoma.go.ke</a>'),
                                     array('#'=> '40',
'Name'=> 'Busia','Governor'=>'Sospeter Ojaamong <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://busia.go.ke">http://busia.go.ke</a>'),
                                     array('#'=> '41',
'Name'=> 'Siaya','Governor'=>'Cornel Rasanga <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://siaya.go.ke">http://siaya.go.ke</a>'),
                                     array('#'=> '42',
'Name'=> 'Kisumu','Governor'=>'Prof. Peter Anyang Nyongo <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://kisumu.go.ke">http://kisumu.go.ke</a>'),

                                       array('#'=> '43',
'Name'=> 'Homabay','Governor'=>'WCyprian Awiti <img width="20%"src="images/odm.png"/>','Website' => '<a href="http://homabay.go.ke">http://homabay.go.ke</a>'),
                                       array('#'=> '44',
'Name'=> 'Migori','Governor'=>'Zachary Okoth Obado <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://migori.go.ke">http://migori.go.ke</a>'),
                                       array('#'=> '45',
'Name'=> 'Kisii','Governor'=>'Wyclife Wafula Wangamiti <img width="20%"src="images/jubilee.png"/>','Website' => '<a href="http://kisii.go.ke">http://kisii.go.ke</a>'),
                                       array('#'=> '46',
'Name'=> 'Nyamira','Governor'=>'John Nyagrama Obiena <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://nyamira.go.ke">http://nyamira.go.ke</a>'),
                                       array('#'=> '47',
'Name'=> 'Nairobi','Governor'=>'Mike Sonko Mbuvi <img width="20%"src="images/odm.png"/>',  'Website' => '<a href="http://nairobi.go.ke">http://nairobi.go.ke</a>'),

);


//echo $county_array

?>
<?php if (count($county_array) > 0): ?>
<table class=countytable>
  <thead>
    <link rel = "stylesheet" type = "text/css" href = "style.css"
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($county_array))); ?></th>

    </tr>

  </thead>
  <tbody>
<?php foreach ($county_array as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>

  </tbody>
</tfoot>
  <td colspan="4">
  <?php
  //$toString= implode(', ', array_map(function ($occurrence){return $occurrence['name'];}, $county_data_array));
  echo "Governors by Parties:  ";
  echo "Jubilee-";
  echo substr_count($county_data,"Jubilee");
  echo ", ODM-";
  echo substr_count($county_data,"ODM");
  echo ", Kanu-";
  echo substr_count($county_data,"KANU");
  echo ", Wiper-";
  echo substr_count($county_data,"WDM K");
  echo ", Narc Kenya-";
  echo substr_count($county_data,"Narc Kenya");
  echo ", FORD Kenya-";
  echo substr_count($county_data,"FORD Kenya");
  echo ", CCM-";
  echo substr_count($county_data,"CCM");
  echo ", Independent governor-";
  echo substr_count($county_data,"Independent");

?>
  </td>
 </tfoot>

</table>
<?php endif; ?>
