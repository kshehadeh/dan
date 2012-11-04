/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "0.1.7",
   minimumCompatibleVersion: "0.1.7",
   build: "0.11.0.164",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'photosofdandiv',
            type:'group',
            rect:['129','70','68','55','auto','auto'],
            c:[
            {
               id:'photosofdan',
               type:'rect',
               rect:['64px','-30px','auto','auto','auto','auto']
            }]
         }],
         symbolInstances: [
         {
            id:'photosofdan',
            symbolName:'photosofdan'
         }
         ]
      },
   states: {
      "Base State": {
         "${_photosofdan}": [
            ["style", "left", '10.7px'],
            ["style", "top", '39.13px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1665,
         autoPlay: true,
         timeline: [
            { id: "eid5", tween: [ "style", "${_photosofdan}", "left", '-85.3px', { fromValue: '10.7px'}], position: 500, duration: 675 },
            { id: "eid9", tween: [ "style", "${_photosofdan}", "left", '-85.3px', { fromValue: '-85.3px'}], position: 1665, duration: 0 },
            { id: "eid6", tween: [ "style", "${_photosofdan}", "top", '47.13px', { fromValue: '39.13px'}], position: 500, duration: 675 },
            { id: "eid7", tween: [ "style", "${_photosofdan}", "top", '-34.87px', { fromValue: '47.13px'}], position: 1175, duration: 490 }         ]
      }
   }
},
"photosofdan": {
   version: "0.1.7",
   minimumCompatibleVersion: "0.1.7",
   build: "0.11.0.164",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['0px','0px','68px','55px','auto','auto'],
      borderRadius: ['50%','50%','50%','50%'],
      id: 'Ellipse',
      stroke: [0,'rgb(0, 0, 0)','none'],
      type: 'ellipse',
      fill: ['rgba(192,192,192,1)']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Ellipse}": [
            ["style", "left", '0px'],
            ["style", "top", '0px']
         ],
         "${symbolSelector}": [
            ["style", "height", '55px'],
            ["style", "width", '68px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: false,
         timeline: [
         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-62262180");
