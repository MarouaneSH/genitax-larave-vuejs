import CGI from '.././components/pages/cgi';
import TAXES from '.././components/pages/taxes';
import faqs from '.././components/pages/faqs';


export const routes = [
    {
        path : "/", 
        component : CGI, 
        name : "CGI",
    },
    {
        path : "/taxes", 
        component : TAXES, 
        name : "TAXES",
    },
    {
        path : "/faqs", 
        component : faqs, 
        name : "faqs",
    }
];