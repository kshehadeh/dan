/***********************
* Adobe Edge Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      $("#Stage").css("margin","auto")

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1665, function(sym, e) {
         sym.play(1);

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'photosofdan'
   (function(symbolName) {   
   
   })("photosofdan");
   //Edge symbol end:'photosofdan'

})(jQuery, AdobeEdge, "EDGE-62262180");