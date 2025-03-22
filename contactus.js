						var co = 0;
						document.getElementById("qes2").style.display = "none";
						document.getElementById("mobilenavss").style.display = "none";
						function newmenu(){
							document.getElementById("mobilenavss").style.display = "block";
							document.getElementById("menus3bar").style.display = "none";
							document.getElementById("start3").style.display = "none";
						}
						function closemwnu(){
							document.getElementById("mobilenavss").style.display = "none";
							document.getElementById("menus3bar").style.display = "block";
							document.getElementById("start3").style.display = "block";
						}
						function req(){
							let x = document.getElementById("fname").value;
							let y = document.getElementById("email").value;
							var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
							let z = document.getElementById("Mobile").value;
							let a = document.getElementById("Country").value;
							let xb = document.getElementById("city").value;
							if(x != '' && y.match(validRegex) && z != '' && a != '' && xb != '' ){
								alert("Successfully Submitted Thank you");
								location.reload();
								window.location.href = "index.html";

							}
						}
						function loginfa(){
							let aun = document.getElementById('usnam').value;
							let apw = document.getElementById('paswd').value;
							if( aun == "fastaidadmin" && apw == "admin@123"){
								document.getElementById('choiceas').style.display = "block";
								document.getElementById("loginpagess").style.display = "none";
							}
							else{
								alert("INVALID USERNAME AND PASSWORD");
								location.reload();
							}
						}
						function conaccess(){
							window.location.href = "contactusdisplay.php";
						}
						function ambaccess(){
							window.location.href = "ambulancerequestaccess.php";
						}
						function quiz(){
							alert("Are you sure, you want to start the quiz");
							document.getElementById("starting").style.display = "none";
							document.getElementById("mainquiz").style.display = "block";
						}
						function q1next(){
							document.getElementById('qes1').style.display = "none";
							document.getElementById("qes2").style.display = "block";
						}
						function q2next(){
							document.getElementById('qes2').style.display = "none";
							document.getElementById("qes3").style.display = "block";
						}
						function q3next(){
							document.getElementById('qes3').style.display = "none";
							document.getElementById("qes4").style.display = "block";
						}
						function q4next(){
							document.getElementById('qes4').style.display = "none";
							document.getElementById("qes5").style.display = "block";
						}
						function q5next(){
							document.getElementById('qes5').style.display = "none";
							document.getElementById("qes6").style.display = "block";
						}
						function q6next(){
							document.getElementById('qes6').style.display = "none";
							document.getElementById("qes7").style.display = "block";
						}
						function q7next(){
							document.getElementById('qes7').style.display = "none";
							document.getElementById("qes8").style.display = "block";
						}
						function q8next(){
							document.getElementById('qes8').style.display = "none";
							document.getElementById("qes9").style.display = "block";
						}
						function q9next(){
							document.getElementById('qes9').style.display = "none";
							document.getElementById("qes10").style.display = "block";
						}
						function q11next(){
							document.getElementById('qes1').style.display = "none";
							document.getElementById("qes2").style.display = "block";
							co=co + 1;
						}
						function q22next(){
							document.getElementById('qes2').style.display = "none";
							document.getElementById("qes3").style.display = "block";
							co=co + 1;
						}
						function q33next(){
							document.getElementById('qes3').style.display = "none";
							document.getElementById("qes4").style.display = "block";
							co=co + 1;
						}
						function q44next(){
							document.getElementById('qes4').style.display = "none";
							document.getElementById("qes5").style.display = "block";
							co=co + 1;
						}
						function q55next(){
							document.getElementById('qes5').style.display = "none";
							document.getElementById("qes6").style.display = "block";
							co=co + 1;
						}
						function q66next(){
							document.getElementById('qes6').style.display = "none";
							document.getElementById("qes7").style.display = "block";
							co=co + 1;
						}
						function q77next(){
							document.getElementById('qes7').style.display = "none";
							document.getElementById("qes8").style.display = "block";
							co=co + 1;
						}
						function q88next(){
							document.getElementById('qes8').style.display = "none";
							document.getElementById("qes9").style.display = "block";
							co=co + 1;
						}
						function q99next(){
							document.getElementById('qes9').style.display = "none";
							document.getElementById("qes10").style.display = "block";
							co=co + 1;
						}
						function q100next(){
							co=co + 1;
							document.getElementById("subMi").style.display = "block";
							document.getElementById("q103").style.background = "white";
							document.getElementById("q103").style.color = "red";
						}
						function q101next(){
							document.getElementById("q101").style.background = "white";
							document.getElementById("subMi").style.display = "block";
							document.getElementById("q101").style.color = "red";
						}
						function q102next(){
							document.getElementById("q102").style.background = "white";
							document.getElementById("subMi").style.display = "block";
							document.getElementById("q102").style.color = "red";
						}
						function q103next(){
							document.getElementById("q104").style.background = "white";
							document.getElementById("subMi").style.display = "block";
							document.getElementById("q104").style.color = "red";
						}
						function marks(){
							document.getElementById("qes10").style.display = "none";
							document.getElementById("finalsc").style.display = "block";
							document.getElementById("scoress").innerHTML = co;
						}
						function book(){
							document.getElementById('bookf').style.display = "none";
						}
						function snakebitei(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "SNAKE BITE";
							document.getElementById('secondName').innerHTML = " First aid for Snake Bites";
							document.getElementById('infoM').innerHTML = " Immediately move away from the area where the bite occurred. If the snake is still attached use a stick or tool to make it let go. Sea snake victims need to be moved to dry land to avoid drowning.<br> <br>Remove anything tight from around the bitten part of the body (e.g.: rings, anklets, bracelets) as these can cause harm if swelling occurs.	<br><br>Reassure the victim. Many snake bites are caused by non-venomous snakes. And even after most venomous snake bites the risk of death is not immediate.<br><br>Immobilize the person completely. Splint the limb to keep it still. Use a makeshift stretcher to carry the person to a place where transport is available to take them to a health facility.<br><br>Never use a tight arterial tourniquet.<br><br>The Australian Pressure Immobilization Bandage (PIB) Method is only recommended for bites by neurotoxic snakes that do not cause local swelling.<br><br>Applying pressure at the bite site with a pressure pad may be suitable in some cases.<br><br>Avoid traditional first aid methods, herbal medicines and other unproven or unsafe forms of first aid.<br><br>Transport the person to a health facility as soon as possible<br><br>Paracetamol may be given for local pain (which can be severe).<br><br>Vomiting may occur, so place the person on their left side in the recovery position.<br><br>Closely monitor airway and breathing and be ready to resuscitate if necessary.";
						}
						function eyeijuri(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "EYE INJURY";
							document.getElementById('secondName').innerHTML = " First aid for EYE INJURY";
							document.getElementById('infoM').innerHTML = "1. For Chemical Exposure <br><br><br>	•Don't rub eyes.<br><br>	 •Immediately wash out the eye with lots of water. Use whatever is closest -- water fountain, shower, garden hose.<br><br>•	Get medical help while you are doing this, or after 15 to 20 minutes of continuous flushing	•<br><br>	Don't bandage the eye.<br><br><br> 2. For a Blow to the Eye	<br><br><br>•	Apply a cold compress, but don't put pressure on the eye	<br><br>•	Take over-the-counter acetaminophen (Tylenol) or ibuprofen (Advil, Motrin) for pain.	<br><br>•	If there is bruising, bleeding, change in vision, or it hurts when your eye moves, see a doctor right away <br><br><br>	3. For a Foreign Particle in Eye	•<br><br><br>	Don't rub the eye.•	Pull the upper lid down and blink repeatedly.<br><br>•	If particle is still there, rinse with eyewash.<br><br>•	If rinsing doesn't help, close eye, bandage it lightly, and see a doctor.";
						}
						function searcherror(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "SearchError";
							document.getElementById('secondName').innerHTML = "Sorry No Results Found !";
							document.getElementById('infoM').innerHTML = "";
						}
						function heartattack(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "HEART ATTACK";
							document.getElementById('secondName').innerHTML = "First aid for HEART ATTACK";
							document.getElementById('infoM').innerHTML = "Call 911 or your local emergency number. Don't ignore the symptoms of a heart attack.<br><br>Chew and swallow an aspirin while waiting for emergency help. Aspirin helps keep your blood from clotting.<br><br>take nitroglycerin, if prescribed <br><br> Begin CPR if the person is unconscious.<br><br>If an automated external defibrillator (AED) is immediately available and the person is unconscious, follow the device instructions for using it.";
						}
						function bleeding(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "BLEEDING";
							document.getElementById('secondName').innerHTML = "First aid for BLEEDING";
							document.getElementById('infoM').innerHTML = "<br>•	Apply direct pressure on the cut or wound with a clean cloth, tissue, or piece of gauze until bleeding stops.<br><br>•	If blood soaks through the material, don’t remove it. Put more cloth or gauze on top of it and continue to apply pressure.	<br><br>•	If the wound is on the arm or leg, raise limb above the heart, if possible, to help slow bleeding.	<br><br>•	Wash your hands again after giving first aid and before cleaning and dressing the wound.<br><br>•	Do not apply a tourniquet unless the bleeding is severe and not stopped with direct pressure";
						}
						function fracture(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "FRACTURE";
							document.getElementById('secondName').innerHTML = "First aid for FRACTURE";
							document.getElementById('infoM').innerHTML = "<br><br>•	Stop any bleeding. Apply pressure to the wound with a sterile bandage, a clean cloth or a clean piece of clothing.	<br><br><br>•	Immobilize the injured area. Don't try to realign the bone or push a bone that's sticking out back in. If you've been trained in how to splint and professional help isn't readily available, apply a splint to the area above and below the fracture sites. Padding the splints can help reduce discomfort.<br><br><br>•	Apply ice packs to limit swelling and help relieve pain. Don't apply ice directly to the skin. Wrap the ice in a towel, piece of cloth or some other material.<br><br><br>	•	Treat for shock. If the person feels faint or is breathing in short, rapid breaths, lay the person down with the head slightly lower than the trunk and, if possible, elevate the legs.";
						}
						function scuandburn(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "BURNS AND SCALDS";
							document.getElementById('secondName').innerHTML = "First aid for BURNS AND SCALDS";
							document.getElementById('infoM').innerHTML = "<br>Treating major burns<br><br><br>Until emergency help arrives:<br><br><br>•	Protect the burned person from further harm. If you can do so safely, make sure the person you're helping is not in contact with the source of the burn. For electrical burns, make sure the power source is off before you approach the burned person. Don't try to remove clothing stuck in the burn.<br><br><br>•	Make certain that the person burned is breathing. If needed, begin rescue breathing if you know how.<br><br><br>•	Remove jewelry, belts and other tight items, especially from the burned area and the neck. Burned areas swell quickly.<br><br><br>•	Cover the burn. Loosely cover the area with gauze or a clean cloth.<br><br><br>•	Raise the burned area. Lift the wound above heart level if possible.<br><br><br>•	Watch for signs of shock. Signs and symptoms include cool, clammy skin, weak pulse and shallow breathing.";
						}
						function poising(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "POISOINING";
							document.getElementById('secondName').innerHTML = "First aid for POISOINING";
							document.getElementById('infoM').innerHTML = "<br><br>What to do while waiting for help<br><br><br>Take the following actions until help arrives:<br><br><br>•	Swallowed poison. Remove anything remaining in the person's mouth. If the suspected poison is a household cleaner or other chemical, read the container's label and follow instructions for accidental poisoning.<br><br><br>•	Poison on the skin. Remove any contaminated clothing using gloves. Rinse the skin for 15 to 20 minutes in a shower or with a hose.<br><br><br>•	Poison in the eye. Gently flush the eye with cool or lukewarm water for 20 minutes or until help arrives.<br><br><br>•	Inhaled poison. Get the person into fresh air as soon as possible.<br><br><br>•	If the person vomits, turn his or her head to the side to prevent choking.<br><br><br>•	Begin CPR if the person shows no signs of life, such as moving, breathing or coughing.<br><br><br>•	Call Poison Help at 800-222-1222 in the United States or your regional poison control for additional instructions.<br><br><br>•	Have somebody gather pill bottles, packages or containers with labels, and any other information about the poison to send along with the ambulance team.";
						}
						function eleshock(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "ELECTRIC SHOCK";
							document.getElementById('secondName').innerHTML = "First aid for ELECTRIC SHOCK";
							document.getElementById('infoM').innerHTML = "<br>take these actions immediately while waiting for medical help:<br><br>•	Turn off the source of electricity, if possible. If not, use a dry, nonconducting object made of cardboard, plastic or wood to move the source away from you and the injured person.	<br><br>	•	Begin CPR if the person shows no signs of circulation, such as breathing, coughing or movement.<br><br>•	Try to prevent the injured person from becoming chilled.<br><br>•	Apply a bandage. Cover any burned areas with a sterile gauze bandage, if available, or a clean cloth. Don't use a blanket or towel, because loose fibers can stick to the burns.<br><br>";
						}
						function deepcut(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "DEEP CUT";
							document.getElementById('secondName').innerHTML = "First aid for DEEP CUT";
							document.getElementById('infoM').innerHTML = "<br><br>1.Stop the bleeding.<br><br>2. Clean the wound<br><br> 3. Use an antibiotic ointment.<br><br>4. Cover the wound<br><br>5. Change the dressing<br><br> 6. Get stitches for deep wounds<br><br>7. Watch for signs of infection.";
						}
						function drowning(){
							document.getElementById('famain').style.display = "none";
							document.getElementById('HeadName').innerHTML = "DROWNING";
							document.getElementById('secondName').innerHTML = "First aid for DROWNING";
							document.getElementById('infoM').innerHTML = "<br><br>Take care to avoid putting yourself in danger if rescuing someone from water. If you pull someone from the water and they are unresponsive, follow these steps:<br><br>1. Check for breathing. Tilt their head back and look, listen and feel for breaths. If they are not breathing, move on to the following steps<br><br>2. Tell someone to call 999 for emergency help – if an AED is available, ask someone to get it but don’t delay starting CPR<br><br>3. Give five rescue breaths: tilt their head back, sealing your mouth over their mouth. Pinch their nose and blow into their mouth. Repeat this five times<br><br>4. Give 30 chest compressions. Push firmly in the middle of their chest and then release. Repeat this 30 times<br><br>5. Give two rescue breaths then continue with cycles of 30 chest compressions and two rescue breaths until help arrives or the casualty shows signs of becoming responsive<br><br>6. If the casualty starts to breathe";
						}
						function searchsub(){
							srch=document.getElementById('serchh').value;
							if (srch=="snakebite" || srch=="Snakebite" || srch=="Snake bite" || srch=="snake bite") {
								window.location.href = "snakebite.html";
							  } else if (srch=="eye injury" || srch=="Eyeinjury" || srch=="EyeInjury" || srch=="Eye injury" || srch=="Eye Injury") {
								window.location.href = "eyeinjury.html";
							  } else if (srch=="heart attack" || srch=="Heart attack" || srch=="HeartAttack" || srch=="attack" || srch=="heart attacj") {
								window.location.href = "heartattack.html";
							  } else if (srch=="Bleeding" || srch=="bleeding" || srch=="bleed" || srch=="bleedings" || srch=="blood come") {
								window.location.href = "bleeding.html";
							  } else if (srch=="Fracture" || srch=="fracture" || srch=="fracturing" || srch=="Fracturings" || srch=="Bone cut") {
								window.location.href = "fracture.html";
							  } else if (srch=="burns" || srch=="Burns" || srch=="burn" || srch=="Scalds" || srch=="scald") {
								window.location.href = "burnsandscalds.html";
							  } else if (srch=="poisoining" || srch=="Poisoining" || srch=="Poison" || srch=="Poision" || srch=="poisn") {
								window.location.href = "poisoining.html";
							  } else if (srch=="Electric shock" || srch=="shock" || srch=="Electricshock" || srch=="electric shock" || srch=="electricity") {
								window.location.href = "electricshock.html";
							  } else if (srch=="deep cut" || srch=="Deep cut" || srch=="deepcut" || srch=="Deepcut" || srch=="Deep cuts") {
								window.location.href = "deepcut.html";
							  } else if (srch=="Drowing" || srch=="drowing" || srch=="drowings" || srch=="drouning" || srch=="Drowings") {
								window.location.href = "drowing.html";
							  } else {
								window.location.href = "erroroccur.html";
							  }
						}
						
						const f = document.getElementById('form');
      const q = document.getElementById('query');
      const google = 'https://www.google.com/search?q=site%3A+';
      const site = 'pagedart.com';

      function submitted(event) {
        event.preventDefault();
        const url = google + site + '+' + q.value;
        const win = window.open(url, '_blank');
        win.focus();
      }

      f.addEventListener('submitsss', submitted);
	  
	  document.getElementById('timer').innerHTML =20 + ":" + 00;



