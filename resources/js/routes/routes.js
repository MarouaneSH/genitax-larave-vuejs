import CGI from '.././components/pages/cgi';
import TAXES from '.././components/pages/taxes';
import faqs from '.././components/pages/faqs';
import infos from '.././components/pages/infos';
import coefficients from '.././components/pages/outils/coefficients';


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
    },
    {
        path : "/infos", 
        component : infos, 
        name : "infos",
    },
    {
        path : "/outils", 
        component : coefficients, 
        name : "coefficients",
    }
];