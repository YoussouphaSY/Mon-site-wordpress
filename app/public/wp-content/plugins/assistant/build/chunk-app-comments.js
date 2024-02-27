"use strict";(self.webpackChunkfl_assistant=self.webpackChunkfl_assistant||[]).push([[770],{8841:(e,t,a)=>{a.r(t),a.d(t,{default:()=>b});var n=a(7462),l=a(7363),s=a.n(l),r=a(4533),c=a(8003),m=a(8325),o=a(9818),i=a(3882),u=a(7820),p=a.n(u);const d=e=>{let{children:t,maxHeight:a=150}=e;const[n,c]=(0,l.useState)(!1),[o,i]=(0,l.useState)(!1),u=(0,l.useRef)(null);(0,l.useLayoutEffect)((()=>{u.current&&u.current.offsetHeight>a?c(!0):i(!0)}),[]);const p={open:{height:"auto",transition:{ease:"easeInOut"}},truncated:{height:a,transition:{ease:"easeInOut"}}};return s().createElement("div",{className:"fl-asst-limit-content"},!n&&s().createElement("div",{className:"fl-asst-limit-content-cell"},s().createElement("div",{ref:u},t)),n&&s().createElement(m.motion.div,{className:"fl-asst-limit-content-cell",initial:!1,animate:o?"open":"truncated",variants:p},s().createElement("div",{ref:u},t),n&&s().createElement(m.motion.div,{className:"fl-asst-limit-content-fadeout",initial:!1,animate:o?"open":"truncated",variants:{open:{opacity:0},truncated:{opacity:1}}})),n&&s().createElement(r.Layout.Row,null,s().createElement(r.Button,{className:"fl-asst-limit-content-expand-button",appearance:"transparent",onClick:e=>{i(!o),e.stopPropagation(),e.preventDefault()}},s().createElement(r.Icon.Ellipsis,null))))};var E=a(1871);const f=e=>{let{items:t=[]}=e;return!t||1>t.length?null:s().createElement("div",{className:"fl-asst-item-extras"},t.map(((e,t)=>{const a={handle:"",icon:s().createElement(r.Icon.Placeholder,null),isShowing:!0,component:r.Button,appearance:"transparent",tabIndex:-1,...e},{component:l,isShowing:c,icon:m,handle:o,className:i,...u}=a;if("function"==typeof c&&!c(e))return null;if(!c)return null;const d=p()({[`fl-asst-item-action-${o}`]:o},i);return s().createElement(l,(0,n.Z)({key:t,className:d},u),m)})))},h=e=>{let{isPending:t=!1,isSpam:a=!1,isTrash:n=!1}=e;return s().createElement("div",{className:"fl-asst-comment-gutter"},s().createElement("div",{className:"fl-asst-thread-line"}),s().createElement("div",{className:"fl-asst-gutter-dot-area"},s().createElement("div",{className:p()({"fl-asst-dot":!0,"is-pending":t,"is-spam":a,"is-trash":n})})))},v=e=>{let{name:t,avatar:a,date:n}=e;return s().createElement("div",{className:"fl-asst-comment-header"},s().createElement("div",{className:"fl-asst-comment-avatar"},s().createElement(r.Layout.AspectBox,{style:{width:30,backgroundImage:`url(${a})`,backgroundSize:"cover"}})),s().createElement("div",{className:"fl-asst-comment-author-name"},t,n&&s().createElement("span",{className:"fl-asst-comment-since"},n)))},g=e=>{let{url:t,ip:a,email:n}=e;const l=e=>e.stopPropagation();return s().createElement("div",{className:"fl-asst-comment-meta"},t&&s().createElement("span",{className:"fl-asst-comment-meta-value"},s().createElement("strong",null,(0,c.__)("URL")," "),s().createElement("a",{href:t,target:"_blank",rel:"noopener noreferrer",onClick:l},t)),a&&s().createElement("span",{className:"fl-asst-comment-meta-value"},s().createElement("strong",null,(0,c.__)("IP Address")," "),s().createElement("span",null,a)),n&&s().createElement("span",{className:"fl-asst-comment-meta-value"},s().createElement("strong",null,(0,c.__)("Email")," "),s().createElement("a",{href:`mailto:${n}`,onClick:l},n)))},_=e=>{let{onDismiss:t,id:a,postID:n}=e;const o=(0,l.useRef)(),[i,u]=(0,l.useState)(!1),p=e=>{e.stopPropagation(),e.preventDefault()};return(0,l.useEffect)((()=>{o.current&&o.current.focus()}),[]),i?s().createElement(r.Layout.Row,{padY:!0,style:{background:"var(--fluid-primary-background)",color:"var(--fluid-primary-color)",borderRadius:"var(--fluid-radius)",marginTop:10}},(0,c.__)("Success! Your reply was posted.")):s().createElement(m.motion.div,{style:{padding:"20px 0 5px"},initial:{scale:0},animate:{scale:1}},s().createElement("textarea",{ref:o,onClick:p,placeholder:(0,c.__)("Type Your Reply..."),style:{maxWidth:"100%",minHeight:100,resize:"none"}}),s().createElement(r.Layout.Row,{style:{padding:"5px 0"}},s().createElement(r.Button,{onClick:e=>{t(),p(e)}},(0,c.__)("Cancel")),s().createElement(r.Button,{status:"primary",onClick:e=>{""!==o.current.value&&(0,E.replyToComment)(a,n,o.current.value,(()=>{})).then((()=>{u(!0)})),p(e)},style:{marginLeft:"auto"}},(0,c.__)("Reply"))))},y=e=>{let{id:t,content:a,isPending:n,isSpam:m,isTrash:o,author:i,post:u,to:E,className:y,actions:C,approveComment:N,unapproveComment:k,spamComment:I,unspamComment:R,trashComment:S,restoreComment:b}=e;const[w,P]=(0,l.useState)(!1),x=[{handle:"reply",title:(0,c.__)("Reply"),icon:s().createElement(r.Icon.Reply,null),onClick:()=>P(!w)},{handle:"approve",onClick:n?N:k,title:n?(0,c.__)("Approve"):(0,c.__)("Reject"),icon:n?s().createElement(r.Icon.Approve,null):s().createElement(r.Icon.Reject,null)},{handle:"spam",onClick:m?R:I,title:m?(0,c.__)("Unmark as Spam"):(0,c.__)("Mark as Spam"),icon:m?s().createElement(r.Icon.Unspam,null):s().createElement(r.Icon.Spam,null)},{handle:"trash",status:"destructive",onClick:o?b:S,title:o?(0,c.__)("Restore"):(0,c.__)("Move to trash"),icon:o?s().createElement(r.Icon.Restore,null):s().createElement(r.Icon.Trash,null)}];return s().createElement("li",{className:p()({"is-spam":m,"is-pending":n,"is-trash":o},y)},s().createElement(r.Button,{to:E,style:{display:"flex",flexDirection:"row",padding:0}},s().createElement(h,{isPending:n,isSpam:m,isTrash:o}),s().createElement("div",{className:"fl-asst-comment-cell"},s().createElement(v,i),n&&!m&&!o&&s().createElement(g,i),s().createElement(d,null,s().createElement("div",{className:"fl-asst-comment-content",dangerouslySetInnerHTML:{__html:a}})),w&&s().createElement(_,{id:t,postID:u.id,onDismiss:()=>P(!1)}))),s().createElement(f,{items:[...C,...x]}))},C=e=>{let{baseURL:t}=e;const{type:a}=(0,o.useAppState)("fl-comments"),n=r.Env.use();return s().createElement(m.AnimatePresence,null,s().createElement(r.List.Comments,{className:"fl-asst-comment-list",type:a,direction:null,getItemComponent:()=>y,getItemProps:(e,a)=>{const{id:l,content:m,approved:o,spam:u,trash:p,thumbnail:d,authorName:E,authorEmail:f,authorIP:h,authorURL:v,timeDiff:g,post:_}=e,y={pathname:`${t}/comment/${l}`,state:{item:e}},C=(0,i.applyFilters)("fl-asst.list-item-actions",[{handle:"view-comment",href:e.url,title:(0,c.__)("View Comment"),icon:s().createElement(r.Icon.View,null)},{handle:"edit-comment",to:y,title:(0,c.__)("Edit Comment"),icon:s().createElement(r.Icon.Edit,null)}],{item:e,listType:"comment",env:n});return{...a,...e,key:l,content:m,isPending:!o,isSpam:u,isTrash:p,post:_,author:{name:E,avatar:d,date:g,email:f,ip:h,url:v},to:y,actions:C}}}))};var N=a(3826);const k=()=>{const{type:e}=(0,o.useAppState)("fl-comments"),{setType:t}=(0,o.getAppActions)("fl-comments");return s().createElement(r.Filter,null,s().createElement(r.Filter.RadioGroupItem,{title:(0,c.__)("Status"),items:N.Do,value:e,defaultValue:N.U8,onChange:e=>t(e)}),s().createElement(r.Filter.Button,{onClick:()=>t(N.U8)},(0,c.__)("Reset Filter")))};var I=a(1201);const R=e=>{let{label:t,baseURL:a}=e;return s().createElement(r.Page,{id:"fl-comments-list-page",padX:!1,padY:!1,title:t,header:s().createElement(k,null),icon:s().createElement(I.Z,{context:"sidebar"}),shouldShowBackButton:!1,shouldScroll:!1},s().createElement(C,{baseURL:a}))},S=r.Page.Comment,b=e=>s().createElement(r.App.Config,(0,n.Z)({pages:{default:R,"comment/:id":S}},e))},7462:(e,t,a)=>{function n(){return n=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n])}return e},n.apply(this,arguments)}a.d(t,{Z:()=>n})}}]);