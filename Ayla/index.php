<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Category Filter in JS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>


        <header>
            <nav class="fixed-top">
                <ul>
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="./index.html">Category</a></li>
                        <li><a href="./login.html">login</a></li>
                        <li><a href="./register.html">signUp</a> </li>
                        <li> <a href="#">user</a></li>
                </ul>
            </nav>
        </header>


        
        <div class = "main-container">
            <h2>Ayla Paradise</h2>
            <h2>Aqaba's beautiful heritage</h2>
            <div class = "filter-container">
                <div class = "category-head">
                    <ul>
                        <div class = "category-title active" id = "all">
                            <li>All</li>
                        </div>
                        <div class = "category-title" id = "Attraction">
                            <li>Attraction</li>
                        </div>
                        <div class = "category-title" id = "Food">
                            <li>Food</li>
                        </div>
                        <div class = "category-title" id = "Activities">
                            <li>Activities</li>
                        </div>
                    </ul>
                </div>

                <div class = "posts-collect">
                    <div class = "posts-main-container">
                        <!-- single post -->
                        <div class = "all Attraction">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/visit the house of al sharif hussein bin ali.jpg" alt = "post">
                                <span class = "category-name">Attraction</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                  
                                </div>
                                <h2>Al Sharif Hussein Bin Ali House</h2>
                                <p>This house is where the great grandfather of His Majesty King Abdullah II resided for six months after World War I.  

                                    Hussein bin Ali was the Sharif and Emir of Mecca from 1908 until 1917. He is known as the initiator of the Arab Revolt in 1916 against the increasingly nationalistic Ottoman Empire during the course of the First World War. In 1924, when the Ottoman Caliphate was abolished he ruled Hejaz until 1924, when, defeated by Abdul Aziz al Saud, he abdicated the kingdom and other secular titles to his eldest son Ali. </p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Attraction">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/castle new.jpg" alt = "post">
                                <span class = "category-name">Attraction</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top"></div>
                               
                                <h2>Aqaba Castle</h2>
                                <p>Every corner in Aqaba tells  a tale. The Aqaba Fort offers a glimpse into Jordan’s history. It dates back to the region of the Mamluke Sultan Qanswah el-Ghawri (1501-1517 AD). The fort was used and renovated during many historical dynasties from the Mamluks themselves to Ottomans. Situated on the coastline, it would later on serve as vital base for overthrowing the Ottomans Empire.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Attraction">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/Ayla-city-Aqaba.jpg" alt = "post">
                                <span class = "category-name">Attraction</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top"></div>
                           

                                <h2> Early Islamic Ayla</h2>
                                <p>The city of Aqaba is both rich in its heritage and its history. The ancient city prospered under many eras and witnessed many different dynasties. Formerly in biblical times it was known as Elot, and during the Roman and Islamic eras it was referred to as Aela or Aliana, whereas, the Ancient Greeks had named it Berenice.
                                </p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Activities">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/رمل.jpg" alt = "post">
                                <span class = "category-name">Activities</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top"></div>
                                <h2> Your Name in Sand </h2>
                                <p> In Aqaba, the sands of time are poured elegantly into small bottles to form desert scenes. Watch the terms of colours or want to see your name, or that of family or friends, enshrined in sand, the craftsmen will be happy to oblige, giving you a souvenir that is truly unique.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Activities">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/صيدjpg.jpg" alt = "post">
                                <span class = "category-name">Activities</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top"></div>
                                <h2> Go Fishing</h2>
                                <p>listen to their stories while waiting for your catch. Don’t worry if it is your first time fishing, you can get a little help with equipment along with the needed bait and an experienced captain to increase your chances of a good catch.

                                </p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Activities">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/divingjpg.jpg" alt = "post">
                                <span class = "category-name">Activities</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top"></div>
                                <h2> Diving in the Red Sea Paradise</h2>
                                <p>If diving is what you're after, then Aqaba is one of a kind. Imagine you being in a coastal location and diving in warm waters, surrounded by brightly colored coral and fish. There are some renowned dive sites such as the shipwreck and the sunken tank and the Japanese gardens. You and your family or friends can put on your diving gear to enter the water and explore the abundance of marine life, all the while hovering weightlessly underwater.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Food">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/شيشبرك.jpg" alt = "post">
                                <span class = "category-name">Food</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
    
                                </div>
                                <h2> Shishbarak </h2>
                                <p>It is a popular dish in the Levant, northern Saudi Arabia, the Hijaz, Central Asia, the South Caucasus and the Middle East.The dish consists of a dough inside which minced lamb is filled and rolled in the shape of a human ear.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Food">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/hooh0.jpg" alt = "post">
                                <span class = "category-name">Food</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                </div>
                                <h2>Houh</h2>
                                <p>Houh ingredients
                                    1-cup flour
                                    
                                    ½-cup water
                                    
                                    Pinch of salt
                                    
                                    Butter
                                    
                                    For the filling
                                    
                                    A mixture of crushed walnuts with coconut, sugar, cardamom and cinnamon (measure to taste)</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all Food">
                            <div class = "post-img">
                                <img src = "./Attraction Aqaba/try--0.jpg" alt = "post">
                                <span class = "category-name">Food</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                
                                  
                                </div>
                                <h2>Sayyadieh recipe</h2>
                                <p>Ingredients:

                                    2 Hammour fish (5 kg)
                                    1 kg red onion
                                    Cloves garlic
                                    11/2 kg small-grained rice corn oil for frying
                                    2 to 3 tbsp. butter ,1 hot chili pepper ,2dried lemons
                                    
                                    Spices:
                                    (measure to taste) cumin, black pepper, cinnamon, mixed spices, 2bay leaves, salt for garnish
                                    
                                    Golden fried almonds and pine nuts, green and red bell pepper slices lemon slices</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                    </div>
                </div>
            </div>
        </div>
        

        <!-- JS file -->
        <script src = "./script.js"></script>

    </body>
</html>